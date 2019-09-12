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

    public function createView($data){
        $this->model->category_id = $data['id_category'];
        $this->model->country_id = $data['ville'];
        $this->model->last_name = $data['last_name'];
        $this->model->first_name = $data['first_name'];
        $this->model->batiment = $data['batiment'];
    }
    
}