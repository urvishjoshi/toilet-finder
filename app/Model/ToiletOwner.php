<?php

namespace App\Model;

use App\Model\ToiletInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ToiletOwner extends Authenticatable
{
	protected $fillable = [
        'email', 'password','name','mobileno','rating','status','auto_allocate',
    ];

    public function toilets()
    {
    	return $this->hasMany(ToiletInfo::class,'owner_id');
    }

    public function toiletusages()
    {
    	return $this->hasMany(ToiletInfo::class,'owner_id');
    }

    
}
