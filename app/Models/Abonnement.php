<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Abonnement extends Model
{
    //
    protected $table = 'abonnement';
    protected $primaryKey = 'id';
    public $timestamps = false;
     protected $fillable = [
        'amount','completed_at'
    ];

    public function user_subscribe(){
    	return $this->hasOne(User::class,'id','user_id');
    }
}
