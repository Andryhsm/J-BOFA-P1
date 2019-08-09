<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Repositories\ArtisanRepository;
use App\Service\UploadService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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
    protected $artisan_repository;
    protected $upload_service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ArtisanRepository $artisan_repo,UploadService $upload)
    {
        $this->middleware('guest:artisan');
        $this->artisan_repository = $artisan_repo;
        $this->upload_service = $upload;
    }

    public function showLogin(){
        if(Auth::guard('artisan')->user()){
            return redirect('artisan/accueil');
        }else{
            return view('front.login.login');
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

    public function createArtisan(Request $request){
        $rules = array(    
            'name' => 'required',        
            'first_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        );
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                $input = $this->uploadImage($request); 
                $users = $this->artisan_repository->createArtisan($input);
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Inscription réussie!');
            return redirect()->route('artisanlogin');
        }

    }
}