<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ToiletInfo extends Model
{
    protected $fillable = [
        'owner_id', 'toilet_name','price','complex_name','address','toilet_lat','toilet_lng','status',
    ];
}
