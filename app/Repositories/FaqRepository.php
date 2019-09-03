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

    public function createQuestion($data){
    	$this->model->name = $data['groupe'];
    	$this->model->question = $data['content'];
    	$this->model->response = $data['response'];
    	$this->model->created_at = \Carbon\Carbon::now();
    	$this->model->status = 1;

    	$this->model->save();
    }
}