<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewProject extends Model
{
    //
    protected $table = "view_project";
    protected $primarykey = "id";

    public function category(){
    	return $this->haseOne(category::class,'id','category_id');
    }

    public function ville(){
    	return $this->haseOne(City::class,'ville_id','country_id');
    }
}
