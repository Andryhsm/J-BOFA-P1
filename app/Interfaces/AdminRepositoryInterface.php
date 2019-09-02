<?php

namespace App\Interfaces;

interface AdminRepositoryInterface
{
	public function getAllUser();
	public function findAdmin($admin_id);
	public function createAdmin($data);
	public function updateAdmin($admin_id, $data);
}