<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
    	return $this->hasOne(User::class,'id','created_by');
    }
}
