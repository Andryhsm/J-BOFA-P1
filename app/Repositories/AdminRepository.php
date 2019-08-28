<?php

namespace App\Repositories;

Use App\Models\Admin;
use App\Intefaces\AdminRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AdminRepository {
	protected $model;

	public function __construct(Admin $admin)
    {
        $this->model = $admin;
    }

    public function createAdmin($data){
    	$this->model->last_name = $data['inputName'];
    	$this->model->first_name = $data['first_name'];
        $this->model->email = $data['inputEmail'];
        $this->model->phone = $data['inputPhone'];
    	if (isset($data['inputPhoto'])) {
            $this->model->photo = $data['inputPhoto'];
        }
        $this->model->password = Hash::make($data['inputPassword']);
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
        $this->model->last_name = $data['inputName'];
        $this->model->first_name = $data['first_name'];
        $this->model->email = $data['inputEmail'];
        $this->model->phone = $data['inputPhone'];
        if (isset($data['inputPhoto'])) {
            $this->model->photo = $data['inputPhoto'];
        }
        $this->model->password = (!empty($data['inputPassword']))? Hash::make($data['inputPassword']) : $this->model->password;
        $this->model->save();
    }

    public function deleteAdmin($admin_id){
        return $this->model->where('id', $admin_id)->delete();
    }

    public function changeStatus($admin_id){
        $this->model = $this->model->find($admin_id);
        if ($this->model->status == 1){
            $this->model->status = 0;
        }
        else{
            $this->model->status = 1;
        }
        $this->model->save();
        $admin = $this->findAdmin($admin_id);
        return $admin;
    }

}