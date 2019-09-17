<?php

namespace App\Repositories;

Use App\Models\ViewProject;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class ViewProjectRepository {
	protected $model;

	public function __construct(ViewProject $view_project)
    {
        $this->model = $view_project;
    }

    public function createDevis($data){
        //dd($data);
        $this->model->category_id = $data['id_category'];
        $this->model->country_id = $data['ville'];
        $this->model->last_name = $data['last_name'];
        $this->model->first_name = $data['first_name'];
        if(isset($data['batiment_type'])){
            $this->model->batiment = $data['batiment_type'];
            $this->model->travaux = $data['travaux'];
            $this->model->prestation = $data['prestation'];
            $this->model->type_energie = $data['energie_type'];
            $this->model->is_chauffe = $data['chauffeau'];
        }
        $this->model->gender = $data['gender'];
        $this->model->phone = $data['phone'];
        $this->model->email = $data['email'];
        $this->model->category_type1 = $data['category1'];
        $this->model->category_type2 = $data['category2'];
        $this->model->hour = $data['hour'];

        $this->model->save();
    }
    
}