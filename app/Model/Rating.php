<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'owner_id', 'toilet_id','user_id','rating','desc',
    ];
}
