<?php

namespace App\Model;

use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use App\User;
use Illuminate\Database\Eloquent\Model;

class ToiletUsageInfo extends Model
{
    protected $fillable = [
        'transaction_id','owner_id', 'user_id','price','toilet_id',
    ];

    public function owner()
    {
    	return $this->belongsTo(ToiletOwner::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function toilet()
    {
        return $this->belongsTo(ToiletInfo::class);
    }
}

