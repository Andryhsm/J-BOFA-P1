<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
 

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

    use AuthenticatesUsers; 

    protected $guard = 'admin'; 

    /**

     * Where to redirect users after login.

     *

     * @var string

     */
    protected $redirectTo = 'admin/home';

    /**

     * Create a new controller instance.

     *

     * @return void

     */
    public function __construct()

    {
        $this->middleware('guest:admin')->except(['logout','logoutAdmin']);
    } 

    public function showLoginForm()
    {
        return view('vendor.adminlte.login');
    }
 

    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            //dd(auth()->guard('admin')->user());
            return redirect()->route('home');
        } 

        return back()->withErrors(['email' => 'Combinaison email et mot de passe incorect.']);
    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
    }
     protected function guard(){
        return Auth::guard('admin');
    }
}