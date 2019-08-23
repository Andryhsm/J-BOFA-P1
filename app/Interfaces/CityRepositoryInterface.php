<?php

namespace App\Interfaces;

interface CityRepositoryInterface
{
	public function getAll();
	public function getCity($data);
}