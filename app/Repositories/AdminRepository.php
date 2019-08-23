<?php

namespace App\Repositories;

Use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AdminRepository {
	protected $model;

	public function __construct(Admin $Admin)
    {
        $this->model = $Admin;
    }

    public function createAdmin($data){
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
    public function findAdmin($id)
    {
        return $this->model->find($id);
    }
    public function getAll(){
    	$data= $this->model->get();
        return $data;
    }

    public function updateAdmin($id,$data){
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