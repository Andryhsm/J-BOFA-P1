<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserProfile extends Model
{
    //
    protected $autoincrements='id';
    protected $table = 'user_profil';
    public $timestamps = false;

    public function user(){
    	return $this->hasOne(User::class,'id','user_id');
    }
}
