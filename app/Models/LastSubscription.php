<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastSubscription extends Model
{
    //
    protected $table = "last_subscribe";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['completed_at'];
}
