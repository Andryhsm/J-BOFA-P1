<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
	public function createCategory($data);
	public function findCategory($id);
	public function getAll();
	public function changeStatus($id);
	public function deleteCategory($id);
	public function updateCategory($id,$data);
	public function getCategory();
}