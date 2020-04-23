<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ToiletOwner extends Authenticatable
{
	protected $fillable = [
        'email', 'password','name','mobileno','rating','status','auto_allocate',
    ];

}
