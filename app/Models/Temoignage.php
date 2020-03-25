<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Temoignage extends Model
{
    //
    protected $table = 'temoin';
    protected $primaryKey = 'id';

    public function categorie(){
    	return $this->hasOne(Category::class,'id','category_id');
    }
}
