<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class City extends Model
{
    //
    protected $table = 'cities';
    protected $primaryKey = 'ville_id';
    public $timestamps = false;

    public function user(){
    	return $this->haseMany(User::class,'city_id','ville_id');
    }
}
