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

    protected $fillable = [
        'user_id','creation', 'siret','portable', 'fax', 'address', 'metier', 'gender', 'rge', 'description'
    ];
    // public function user(){
    // 	return $this->hasOne(User::class,'id','user_id');
    // }
}
