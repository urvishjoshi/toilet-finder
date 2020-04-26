<?php

namespace App\Model;

use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'owner_id', 'toilet_id','user_id','rating','desc',
    ];
    protected $dates = ['created_at'];

    public function toilet()
    {
    	return $this->belongsTo(ToiletInfo::class);
    }

    public function owner()
    {
    	return $this->belongsTo(ToiletOwner::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
