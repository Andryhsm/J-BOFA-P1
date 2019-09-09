<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Intefaces\AdminRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use App\Models\Faqs;

class FaqRepository {
	protected $model;

	public function __construct(Faqs $faq)
    {
        $this->model = $faq;
    }

    public function createFaq($data){
        $this->model->name = $data['groupe'];
    	$this->model->created_by = $data['admin_id'];
    	$this->model->question = $data['content'];
    	$this->model->respone = $data['response'];
    	$this->model->created_at = \Carbon\Carbon::now();
    	$this->model->status = 1;

    	$this->model->save();
    }

    public function getAll(){
        return $this->model->all();
    }

    public function deleteFaq($id){
        return $this->model->where('id',$id)->delete();
    }

    public function findFaq($id){
        return $this->model->find($id);
    }

    public function updateFaq($id,$data){
        $this->model = $this->model->find($id);
        $this->model->name = $data['groupe'];
        $this->model->question = $data['content'];
        $this->model->respone = $data['response'];
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

    public function getFaq(){
        return $this->model->where('status',1)->get();
    }
}