<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    //
    protected $table = 'abonnement';
    protected $primaryKey = 'id';
    public $timestamps = false;
     protected $fillable = [
        'amount','completed_at'
    ];
}
