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
        if(Auth::user()){
            return redirect('artisan/accueil');
        }
      return view("front.login.login");
    }

    public function inscription(){
        $categories = $this->category_repo->getCategory();
        if(Auth::user()){
            return redirect('artisan/accueil');
        }
    	return view("front.login.signin",compact("categories"));
    }

    public function getCity(Request $request){
        return $this->city_repo->getCity($request->all());
    }

    public function viewProject($id){
        $categories = $this->category_repo->getCategory();
        $details = $this->category_repo->findCategory($id);
        $randoms = $this->category_repo->getRandom();
        return view('front.page.view_project',compact("categories","details","randoms"));
    }

    public function getEmail(Request $request){
        return $this->user_repo->getMail($request->all());
    }

    public function getIndex()
    {
        $temoins = $this->temoin_repo->getTemoins();
        $categories = $this->category_repo->getPopular();
        return view('front.home.index', compact('temoins','categories'));
    }

    public function newDevis(){
        $categories = $this->category_repo->getCategory();
        $details = false;
        $randoms = $this->category_repo->getRandom();
        return view('front.page.view_project',compact("categories","details","randoms"));
    }

    public function recuperMdp(){
        return view('artisan.recuperation');
    }

    public function updateMdp(Request $request){
        //dd($mdp->password);
        $rules = array(
            'email' => 'required | email' ,
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
}


