<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Category;
use App\Models\City;
use App\Models\UserProfile;
use App\Models\LastSubscription;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','first_name','city_id','category_id','enterprise', 'email','status', 'password', 'phone', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function city(){
        return $this->hasOne(City::class,'ville_id','city_id');
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class,'user_id','id');
    }
    public function user_abonnement()
    {
        return $this->hasOne(LastSubscription::class,'user_id','id');
    }
}
