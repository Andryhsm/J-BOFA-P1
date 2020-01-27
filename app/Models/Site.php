<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $autoincrements='id';
    protected $table = 'site_web';
    public $timestamps = false;

    protected $fillable = [
        'user_id','name', 'email','phone', 'subject', 'message', 'budget', 'enterprise'
    ];
}
