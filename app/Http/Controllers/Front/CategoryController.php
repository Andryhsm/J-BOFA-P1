<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
	protected $category_repository;
    protected $user_repo;

    public function __construct(CategoryRepository $category_repository,UserRepository $user_repo){
        $this->category_repository = $category_repository;
        $this->user_repo = $user_repo;
    }
    
    public function getAllCategories(){
    	$categories = $this->category_repository->getCategory();
        if(isset($categories)){
            $values = $categories;
        }else{
            $values = collect([]);
        }
        return $values;
    }

    public function renovation(){
        $categories = $this->category_repository->getCategory();
        $contact = $this->user_repo->getContact();
        return view('front.categories.categories',compact('categories','contact'));
    }

    public function tarifHoraire(){
        $contact = $this->user_repo->getContact();
        return view('front.categories.tarif_hour',compact('contact'));
    }

    public function help(){
        $contact = $this->user_repo->getContact();
        return view('front.categories.help_me',compact('contact'));
    }

    public function termCondition(){
        $contact = $this->user_repo->getContact();
        return view('front.page.term&condition',compact('contact'));
    }

}
