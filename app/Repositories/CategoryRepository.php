<?php

namespace App\Repositories;

Use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class CategoryRepository {
	protected $model;

	public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function createCategory($data){
    	$this->model->name = $data['name'];
    	$this->model->created_by = $data['user_id'];
    	$this->model->created_at = \Carbon\Carbon::now();
    	$this->model->save();
    }
    public function findCategory($id)
    {
        return $this->model->find($id);
    }
    public function getAll(){
    	$data= $this->model->with('admin')->get();
        return $data;
    }
    public function changeStatus($id){
        $this->model = $this->model->find($id);
        if ($this->model->status == 1){
            $this->model->status = 0;
        }
        else{
            $this->model->status = 1;
        }
        $this->model->save();
        $user = $this->findCategory($id);
        return $user;
    }

    public function deleteCategory($id){
        return $this->model->where('id', $id)->delete();
    }

    public function updateCategory($id,$data){
        $this->model = $this->model->find($id);
        $this->model->name = $data['name'];
        $this->model->status = $data['inputStatus'];
        $this->model->save();
    }

    public function getCategory(){
        return $this->model->where('status',1)->get();
    }
}