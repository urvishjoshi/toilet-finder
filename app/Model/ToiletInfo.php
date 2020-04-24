<?php

namespace App\Model;

use App\Model\Rating;
use App\Model\ToiletOwner;
use Illuminate\Database\Eloquent\Model;

class ToiletInfo extends Model
{
    protected $fillable = [
        'owner_id', 'toilet_name','price','complex_name','address','toilet_lat','toilet_lng','status',
    ];

    public function owner()
    {
    	return $this->belongsTo(ToiletOwner::class);
    }

    public function ratings()
    {
    	return $this->hasMany(Rating::class,'toilet_id');
    }
}
