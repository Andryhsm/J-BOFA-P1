<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Faqs extends Model
{
    //
    protected $table = "faqs";
    protected $primaryKey = "id";
    //public $timestamps = false;
    // protected $fillable = [
    // 	"name","question","response","status",
    // ];

    public function admin(){
    	return $this->haseOne(Admin::class,'id','created_by');
    }
}
