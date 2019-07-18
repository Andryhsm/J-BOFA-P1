<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index() {
      return view("front.login.login");
    }

    public function inscription(){
    	return view("front.login.signin");
    }
}
