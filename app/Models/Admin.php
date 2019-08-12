<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'last_name','first_name', 'email','status', 'password', 'phone', 'photo'
    ];
}
