<?php

namespace App;

use App\Model\Rating;
use App\Model\ToiletUsageInfo;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password','name','mobileno','gender','age',
    ];

    public function toiletusages()
    {
        return $this->hasMany(ToiletUsageInfo::class,'user_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class,'user_id');
    }

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
}
