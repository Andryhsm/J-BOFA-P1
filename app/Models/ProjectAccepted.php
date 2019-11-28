<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ProjectAccepted extends Model
{
    //
    protected $table = "project_accepted";

    public function poject(){
    	return $this->hasOne(ViewProject::class,'id','project_id');
    }

    public function user(){
    	return $this->hasOne(User::class,'id','user_id');
    }
}
