<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Intefaces\AdminRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use App\Models\Temoignage;

class TemoigneRepository {
	protected $model;

	public function __construct(Temoignage $temoin)
    {
        $this->model = $temoin;
    }

    public function createTemoin($data){
        $this->model->name = $data['name'];
    	$this->model->titre = $data['titre'];
    	$this->model->description = $data['description'];
        $this->model->name = $data['name'];
    	$this->model->category_id = $data['category'];
    	$this->model->created_at = \Carbon\Carbon::now();
    	$this->model->status = 1;

    	$this->model->save();
    }

    public function getAll(){
        return $this->model->with('categorie')->get();
    }

    public function deleteFaq($id){
        return $this->model->where('id',$id)->delete();
    }

    public function findTemoin($id){
        return $this->model->find($id);
    }

    public function updateTemoin($id,$data){
        $this->model = $this->model->find($id);
        $this->model->name = $data['name'];
        $this->model->titre = $data['titre'];
        $this->model->description = $data['description'];
        $this->model->name = $data['name'];
        $this->model->category_id = $data['category'];
        $this->model->updated_at = \Carbon\Carbon::now();
        $this->model->status = $data['inputStatus'];
        $this->model->save();
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
        $faq = $this->findFaq($id);
        return $faq;
    }

    public function getTemoins(){
        return $this->model->with('categorie')->where('status',1)->limit(3)->get();
    }

    public function getAllTemoins()
    {
        return $this->model->with('categorie')->where('status',1)->get();
    }

}