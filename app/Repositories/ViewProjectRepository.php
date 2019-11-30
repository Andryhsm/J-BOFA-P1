<?php

namespace App\Repositories;

Use App\Models\ViewProject;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use App\Models\ProjectAccepted;

class ViewProjectRepository {
	protected $model;
    protected $accepted;

	public function __construct(ViewProject $view_project,ProjectAccepted $accepted)
    {
        $this->model = $view_project;
        $this->accepted = $accepted;
    }

    public function createDevis($data){
        //dd($data);
        $this->model->category_id = $data['id_category'];
        $this->model->country_id = $data['ville'];
        $this->model->last_name = $data['last_name'];
        $this->model->first_name = $data['first_name'];
        $this->model->batiment = $data['batiment_type'];
        $this->model->travaux = $data['travaux'];
        $this->model->prestation = $data['prestation'];
        if(isset($data['chauffeau'])){
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

    //Projet disponible

    public function projectDispo($categoriy_id){
        return $this->model->with('category','city')->where('category_id',$categoriy_id)->get();
    }

    public function getProject($id){
        return $this->model->with('category','city')->find($id);
    }

    public function createAccept(Request $request){
        
    }
    
}