<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailConfirmation;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/artisan/accueil';
    protected $user_repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $user_repo)
    {
        $this->middleware('guest');
        $this->user_repository = $user_repo;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        // dd($data);
        // return User::create([
        //     'name' => $data['name'],
        //     'first_name' => $data['first_name'],
        //     'category_id' => $data['category'],
        //     'city_id' => $data['ville'],
        //     'enterprise' => $data['enterprise'],
        //     'phone' => $data['phone'],
        //     'email' => $data['email'],
        //     'status' => 1,
        //     'password' => Hash::make($data['password']),
        // ]);
       $user = $this->user_repository->createUser($data->all());
       // dd($user->id);
       //if (auth()->attempt(['email' => $data->email, 'password' => $data->password])) {
            //dd(auth()->user()->id);
       $names = $data->first_name.' '.$data->name;
       $email = $data->email;
       $id = $user->id;
            $valueArray = [
                'name' => $data->first_name.' '.$data->name,
                'email'=>$data->email,
                'message'=>'Vous recevez cet email car nous avons reçu une demande d\'inscription pour votre compte ce courrier. :)',
                'url_confirm'=>url("artisan/confirm_email/".$user->id)
            ];
            Mail::to($data->email)->send(new MailConfirmation($valueArray));
            return redirect('confirmation/names='.$email.'_'.$names.'_'.$id);
        // }else{
        //     return redirect()->guest(route('connexion'));
        // }
    }

    public function after($names,$email,$id){
        return view('front/login/inscription', compact('names','email','id'));
    }
}
