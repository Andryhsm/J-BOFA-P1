<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Redirect;
use App\Service\UploadService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $upload_service;
    public function __construct(UploadService $upload){
        $this->upload_service = $upload;
    }
    public function index() {
      return view("front.login.login");
    }

    public function inscription(){
    	return view("front.login.signin");
    }
}
