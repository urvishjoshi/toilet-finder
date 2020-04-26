<?php

namespace App\Model;

use App\Model\Country;
use App\Model\State;
use App\Model\ToiletInfo;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['city','country_id','state_id'];

    public function toilets()
    {
    	return $this->hasMany(ToiletInfo::class,'city_id');
    }
    public function state()
    {
    	return $this->belongsTo(State::class);
    }
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}
