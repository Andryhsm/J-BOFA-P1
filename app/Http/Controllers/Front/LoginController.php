<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\CityRepository;
use Illuminate\Support\Facades\Redirect;
use App\Service\UploadService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $upload_service;
    protected $category_repo;
    protected $city_repo;
    public function __construct(UploadService $upload, CategoryRepository $category_repo, CityRepository $city){
        $this->upload_service = $upload;
        $this->category_repo = $category_repo;
        $this->city_repo = $city;
    }
    public function index() {
      return view("front.login.login");
    }

    public function inscription(){
        $categories = $this->category_repo->getCategory();
    	return view("front.login.signin",compact("categories"));
    }

    public function getCity(Request $request){
        return $this->city_repo->getCity($request->all());
    }
}
