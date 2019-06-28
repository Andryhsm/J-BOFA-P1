<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\UserRepositoryInterface;
//use App\Repository\UserRepository;

class ProfilController extends Controller
{

	protected $user_repository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepositoryInterface $user_repository)
    {
        $this->middleware('auth');
        $this->user_repository = $user_repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$user = Auth::user();
        return view('admin.user.index', compact('user'));
    }

    public function update(Request $request)
    {
        $rules = array(    
            'inputName' => 'required',        
            'inputPhone' => 'required',
            'inputEmail' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            try{
                $users = $this->user_repository->updateUser(Auth::user()->id, $request->all());
            }catch(\Exception $e){
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            }
            toastr()->success('Modification réussie!');
            return redirect()->back();
        }
    }
}