<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ToiletOwner extends Authenticatable
{
	protected $fillable = [
        'email', 'password','name','mobileno','complex_name','location_name','location_map','address','price','rating','status',
    ];

}
