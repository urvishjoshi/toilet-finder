<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ToiletUsageInfo extends Model
{
    protected $fillable = [
        'owner_id', 'user_id','price','toilet_id',
    ];
}