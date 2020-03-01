<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\CityRepository;
use App\Repositories\UserRepository;
use App\Repositories\TemoigneRepository;
use Illuminate\Support\Facades\Redirect;
use App\Service\UploadService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\MdpInitialize;
use Auth;
class LoginController extends Controller
{
    protected $upload_service;
    protected $category_repo;
    protected $user_repo;
    protected $temoin_repo;
    protected $city_repo;
    public function __construct(UploadService $upload, CategoryRepository $category_repo, CityRepository $city,UserRepository $user_repo,TemoigneRepository $temoin_repo){
        $this->upload_service = $upload;
        $this->category_repo = $category_repo;
        $this->city_repo = $city;
        $this->user_repo = $user_repo;
        $this->temoin_repo = $temoin_repo;
    }
    public function index() {
        $contact = $this->user_repo->getContact();
        if(Auth::user()){
            return redirect('artisan/accueil');
        }
      return view("front.login.login",compact('contact'));
    }

    public function inscription(){
        $contact = $this->user_repo->getContact();
        $categories = $this->category_repo->getCategory();
        if(Auth::user()){
            return redirect('artisan/accueil');
        }
    	return view("front.login.signin",compact("categories","contact"));
    }

    public function getCity(Request $request){
        return $this->city_repo->getCity($request->all());
    }

    public function viewProject($id){
        $categories = $this->category_repo->getCategory();
        $details = $this->category_repo->findCategory($id);
        $randoms = $this->category_repo->getRandom();
        $contact = $this->user_repo->getContact();
        return view('front.page.view_project',compact("categories","details","randoms","contact"));
    }

    public function getCategory(){
        $category = Input::get('name');
        $categorie = $this->category_repo->getCategories($category);
        if(count($categorie) >0){
            $details = $categorie[0];
            $categories = $this->category_repo->getCategory();
            $randoms = $this->category_repo->getRandom();
            $contact = $this->user_repo->getContact();
            //dd($details);
            return view('front.page.view_project',compact("categories","details","randoms","contact"));
        }else{
            return Redirect::back()->withInput()->withErrors('validator');
        }
    }

    public function getEmail(Request $request){
        return $this->user_repo->getMail($request->all());
    }

    public function getIndex()
    {
        $temoins = $this->temoin_repo->getTemoins();
        $categories = $this->category_repo->getPopular();
        $contact = $this->user_repo->getContact();
        return view('front.home.index', compact('temoins','categories','contact'));
    }

    public function newDevis(){
        $categories = $this->category_repo->getCategory();
        $details = false;
        $randoms = $this->category_repo->getRandom();
        $contact = $this->user_repo->getContact();
        return view('front.page.view_project',compact("categories","details","randoms","contact"));
    }

    public function recuperMdp($id){
        // $email = Input::get('email');
        // $user = $this->user_repo->getMail($email);
        // $mail_conf = $user[0]->email;
        $contact = $this->user_repo->getContact();
        return view('artisan.recuperation',compact('id','contact'));
    }

    public function updateMdp(Request $request){
        //dd($id);
        $rules = array(
            'password' => 'required' ,
            'confirm' => 'required' ,
        );
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            toastr()->error('Veuillez completer les champs !');
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            if($request->password == $request->confirm){
                $this->user_repo->reseteMdp($request->all());
                toastr()->success('Votre mot de passe est à jour !' );
                return redirect('/artisan/accueil');
            }else{
                toastr()->warning('Les nouveaux mot de passe ne sont pas identique !' );
                return Redirect::back()->withInput()->withErrors($validator);
            }
            
        }
    }


    public function hoWork(){
        $contact = $this->user_repo->getContact();
        return view('front.page.how_work',compact('contact'));
    }

    public function mdpReinitial(Request $request){
        $user = $this->user_repo->getOne($request->email);
        $id = $user[0]->id;
        $contact = $this->user_repo->getContact();
        //dd(url('recuperation/'.$id));
        $valueArray = [
            'email'=>$request->email,
            'url'=>url("recuperation/".$id),
        ];
        //dd($request->email);
        Mail::to($request->email)->send(new MdpInitialize($valueArray));
        return view('front.login.reinitial',compact('contact'));
        //}
    }
    
    public function confirmation($name){
        $contact = $this->user_repo->getContact();
        return view('front/login/inscription',compact('names','contact'));
    }

}


