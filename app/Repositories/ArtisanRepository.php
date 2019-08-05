<?php

namespace App\Repositories;

Use App\Models\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class ArtisanRepository {
	protected $model;

	public function __construct(Artisan $artisan)
    {
        $this->model = $artisan;
    }

    public function createArtisan($data){
    	$this->model->last_name = $data['name'];
    	$this->model->first_name = $data['first_name'];
        $this->model->email = $data['email'];
        $this->model->phone = $data['phone'];
    	if (isset($data['photo'])) {
            $this->model->photo = $data['photo'];
        }
        $this->model->password = Hash::make($data['password']);
        $this->model->status = 1;
    	$this->model->save();
    }
    public function findArtisan($id)
    {
        return $this->model->find($id);
    }
    public function getAll(){
    	$data= $this->model->get();
        return $data;
    }

    public function updateArtisan($id,$data){
        $this->model = $this->model->find($id);
        $this->model->last_name = $data['name'];
        $this->model->first_name = $data['first_name'];
        $this->model->email = $data['email'];
        $this->model->phone = $data['phone'];
        if (isset($data['photo'])) {
            $this->model->photo = $data['photo'];
        }
        $this->model->password = (!empty($data['password']))? Hash::make($data['password']) : $this->model->password;
        $this->model->save();
    }

}