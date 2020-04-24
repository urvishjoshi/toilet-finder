<?php

namespace App\Model;

use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'owner_id', 'toilet_id','user_id','rating','desc',
    ];

    public function toilet()
    {
    	return $this->belongsTo(ToiletInfo::class);
    }
}
