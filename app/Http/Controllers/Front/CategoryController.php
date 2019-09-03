<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
	protected $category_repository;

    public function __construct(CategoryRepository $category_repository){
        $this->category_repository = $category_repository;
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
}
