<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

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
       if (auth()->attempt(['email' => $data->email, 'password' => $data->password])) {
            //dd(auth()->guard('admin')->user());
            return redirect()->route('artisan_home');
        }else{
            return redirect()->guest(route('connexion'));
        }
    }
}
