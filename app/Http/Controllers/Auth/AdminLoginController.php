<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Repositories\AdminRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Auth;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $admin_repository;
    protected $upload_service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminRepository $admin_repository,UploadService $upload)
    {
        $this->admin_repository = $admin_repository;
        $this->upload_service = $upload;
    }

    public function showLogin(){        
        return view('front.login.login');        
    }

    public function loginAdmin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('Admin')->attempt(['email' => $request->email,'password'=> $request->password],$request->remember)){
            return redirect('Admin/home');
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}