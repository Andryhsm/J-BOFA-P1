<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
Use App\User;
Use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    protected $model;
    protected $user_profil;

	public function __construct(User $user,UserProfile $user_profil)
    {
        $this->model = $user;
        $this->user_profil = $user_profil;
    }

    public function findUser($user_id)
    {
        return $this->model->with('profile')->with('category')->with('city')->find($user_id);
    }

    public function createUser($data)
    {
        $this->model->name = $data['name'];
        $this->model->first_name = $data['first_name'];
        $this->model->enterprise = $data['enterprise'];
        $this->model->city_id = $data['ville'];
        $this->model->category_id = $data['category'];
        $this->model->email = $data['email'];
        $this->model->phone = $data['phone'];
        if (isset($data['photo'])) 
            $this->model->photo = $data['photo'];
        $this->model->password = Hash::make($data['password']);
        $this->model->status = 1;
        $this->model->save();
        return $this->model;
    }

    public function updateUser($user_id, $data)
    {
        $this->model = $this->model->with('category')->with('city')->find($user_id);
        $this->model->name = $data['name'];
        $this->model->first_name = $data['first_name'];
        $this->model->enterprise = $data['enterprise'];
        $this->model->city_id = $data['ville'];
        $this->model->email = $data['email'];
        $this->model->phone = $data['phone'];
        if (isset($data['photo'])) 
            $this->model->photo = $data['photo'];        
        $this->model->password = (!empty($data['inputPassword']))? Hash::make($data['inputPassword']) : $this->model->password;
        $this->model->save();

        $this->user_profil = $this->user_profil->updateOrCreate(['user_id'   => $user_id],
            ['siret'=> $data['siret'],'creation'=> $data['creation'],'portable'=> $data['portable'],'fax'=> $data['fax'],'address'=> $data['address'],'metier'=> $data['metier'],'rge'=> $data['rge'],'gender'=> $data['gender'],'site'=> $data['site'],'description'=> $data['description']]);

    }

    public function getAllUser(){
        return $this->model->with('profile')->with('category')->with('city')->orderBy('id','desc')->get();
    }

    public function deleteUser($user_id){
        return $this->model->where('id', $user_id)->delete();
    }

    public function changeStatus($user_id){
        $this->model = $this->model->with('category')->with('city')->find($user_id);
        if ($this->model->status == 1){
            $this->model->status = 0;
        }
        else{
            $this->model->status = 1;
        }
        $this->model->save();
        $user = $this->findUser($user_id);
        return $user;
    }

    public function getMail($email){
        return $this->model->select('email')->where('email',$email)->get();
    }

    public function getTenArtisan(){
        return $this->model->with('profile')->with('category')->with('city')->orderBy('created_at','desc')->limit(10)->get();
    }
}