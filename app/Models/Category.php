<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\Temoignage;
use App\User;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name','created_by','created_at', 'status'
    ];

    public function admin(){
    	return $this->hasOne(Admin::class,'id','created_by');
    }

    public function user(){
        return $this->hasMany(User::class,'category_id','id');
    }

    public function temoin(){
        return $this->hasMany(Temoignage::class,'category_id','id');
    }
}
