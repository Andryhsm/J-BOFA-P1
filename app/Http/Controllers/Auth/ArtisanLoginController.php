<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class ArtisanLoginController extends Controller
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'artisan/accueil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:artisan');
    }

    public function showLogin(){
        if(Auth::guard('artisan')->user()){
            return redirect('artisan/accueil');
        }else{
            return view('artisan.login');
        }
        
    }

    public function loginAdmin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('artisan')->attempt(['email' => $request->email,'password'=> $request->password],$request->remember)){
            return redirect('artisan/accueil');
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}