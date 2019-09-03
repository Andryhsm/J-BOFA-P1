<?php

namespace App\Repositories;

//use App\Interfaces\CityRepositoryInterface
use App\Models\City;

class CityRepository{
	protected $model;

	public function __construct(City $cities)
    {
        $this->model = $cities;
    }

    public function getAll(){
    	return $this->model->get();
    }

    public function getCity($postal_code){
    	return $this->model->where('ville_code_postal', 'LIKE', $postal_code.'%')->orderBy('ville_nom','asc')->get();
    }
}