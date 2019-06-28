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
        $this->model->save();
    }
}