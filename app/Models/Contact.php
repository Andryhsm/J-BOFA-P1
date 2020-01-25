<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_site';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name','phone'
    ];
}
