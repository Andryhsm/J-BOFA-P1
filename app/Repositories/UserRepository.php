<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
Use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

	public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function findUser($user_id)
    {
        return $this->model->with('city')->find($user_id);
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
        $this->model->name = $data['inputName'];
        $this->model->email = $data['inputEmail'];
        $this->model->phone = $data['inputPhone'];
        $this->model->status = $data['inputStatus'];
        if (isset($data['inputPhoto'])) 
            $this->model->photo = $data['inputPhoto'];        
        $this->model->password = (!empty($data['inputPassword']))? Hash::make($data['inputPassword']) : $this->model->password;
        $this->model->save();
    }

    public function getAllUser(){
        return $this->model->with('category')->with('city')->orderBy('id','desc')->get();
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
        return $this->model->with('category')->with('city')->orderBy('created_at','desc')->limit(10)->get();
    }
}