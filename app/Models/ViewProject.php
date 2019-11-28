<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class ViewProject extends Model
{
    //
    protected $table = "view_project";
    protected $primarykey = "id";

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function city(){
        return $this->hasOne(City::class,'ville_id','city_id');
    }
}
