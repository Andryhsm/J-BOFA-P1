<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
	public function findUser($user_id);
	public function updateUser($user_id, $data);
}