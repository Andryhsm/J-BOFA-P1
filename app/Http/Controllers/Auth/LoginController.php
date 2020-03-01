<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class LoginController extends Controller
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
    protected $redirectTo = '/artisan/accueil';
    protected $user_repo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $user_repo)
    {
        $this->middleware('guest')->except('logout');
        $this->user_repo = $user_repo;
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/connexion');
    }
    
    public function confirmation($name){
        $contact = $this->user_repo->getContact();
        return view('front/login/inscription',compact('names','contact'));
    }
}
