<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;

class LoginController extends Controller
{
	protected $category_repository;
    public function __construct(CategoryRepository $category_repository){
        $this->category_repository = $category_repository;
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
}
