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
        return $this->model->find($user_id);
    }

    public function createUser($data)
    {
        $this->model->name = $data['inputName'];
        $this->model->email = $data['inputEmail'];
        $this->model->phone = $data['inputPhone'];
        if (isset($data['inputPhoto'])) 
            $this->model->photo = $data['inputPhoto'];
        $this->model->password = Hash::make($data['inputPassword']);
        $this->model->save();
    }

    public function updateUser($user_id, $data)
    {
        $this->model = $this->model->find($user_id);
        $this->model->name = $data['inputName'];
        $this->model->email = $data['inputEmail'];
        $this->model->phone = $data['inputPhone'];
        if (isset($data['inputPhoto'])) 
            $this->model->photo = $data['inputPhoto'];        
        $this->model->password = (!empty($data['inputPassword']))? Hash::make($data['inputPassword']) : $this->model->password;
        $this->model->save();
    }

    public function getAllUser(){
        return $this->model->orderBy('id','desc')->get();
    }

    public function deleteUser($user_id){
        return $this->model->where('id', $user_id)->delete();
    }
}