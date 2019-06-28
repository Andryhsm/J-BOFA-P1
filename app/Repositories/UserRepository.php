<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
Use App\User;

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


    public function updateUser($user_id, $data)
    {
        $this->model = $this->model->find($user_id);
        $this->model->name = $data['inputName'];
        $this->model->email = $data['inputEmail'];
        $this->model->phone = $data['inputPhone'];
        $this->model->photo = $data['inputPhoto'];
        $this->model->save();
    }

    public function getAllUser(){
        return $this->model->orderBy('id','desc')->get();
    }

    public function deleteUser($user_id){
        return $this->model->where('id', $user_id)->delete();
    }
}