<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\ArtisanRepository;
use Illuminate\Support\Facades\Redirect;
use App\Service\UploadService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $category_repository;
    protected $upload_service;
	protected $artisan_repository;
    public function __construct(ArtisanRepository $artisan_repo, CategoryRepository $category_repository,UploadService $upload){
        $this->category_repository = $category_repository;
        $this->artisan_repository = $artisan_repo;
        $this->upload_service = $upload;
        // $this->middleware('guest:artisan');
    }
    public function index() {
      return view("front.login.login");
    }

    public function inscription(){
    	return view("front.login.signin");
    }

    public function front(){
    	$categories = $this->category_repository->getCategory();
        if(isset($categories)){
            $values = $categories;
        }else{
            $values = collect([]);
        }
        return $values;
    }

    public function createArtisan(Request $request){
        $rules = array(    
            'name' => 'required',        
            'first_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                $input = $request->all();
                $users = $this->user_repository->createArtisan($input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Inscription réussie!');
            return redirect()->route('artisanlogin');
        }

    }
}
