<?php

namespace App\Model;

use App\Model\Country;
use App\Model\ToiletInfo;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['state','country_id'];

    public function toilets()
    {
    	return $this->hasMany(ToiletInfo::class,'state_id');
    }

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}
