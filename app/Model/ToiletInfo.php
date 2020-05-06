<?php

namespace App\Model;

use App\Model\City;
use App\Model\Country;
use App\Model\Rating;
use App\Model\State;
use App\Model\ToiletOwner;
use App\Model\ToiletUsageInfo;
use Illuminate\Database\Eloquent\Model;

class ToiletInfo extends Model
{
    protected $fillable = [
        'owner_id', 'toilet_name','price','complex_name','address','toilet_lat','toilet_lng','status','type',
    ];

    public function getOwner()
    {
        return $owner = $this->owner['name'];
    }
    public function getFullAddress()
    {
        return $address = ", ".$this->city['city'].", ".$this->state['state'].", ".$this->country['country'];
    }
    public function getAverageRating()
    {
        return $this->ratings->count() > 0 ? round($this->ratings->sum('rating')/$this->ratings->count(),2) : 0;
    }
    public function getType()
    {
        if($this->type=='0') $t = 'Female'; elseif ($this->type=='1')   $t = 'Male'; else  $t = 'Male & Female'; return $t;
    }
    public function getStatus()
    {
        return $this->status=='0' ? 'Not active' : 'Active';
    }
    public function getCountry()
    {
        return $this->country['country'];
    }
    public function getState()
    {
        return $this->state['state'];
    }
    public function getCity()
    {
        return $this->city['city'];
    }
    
    public function owner()
    {
    	return $this->belongsTo(ToiletOwner::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function ratings()
    {
    	return $this->hasMany(Rating::class,'toilet_id');
    }
    public function usages()
    {
        return $this->hasMany(ToiletUsageInfo::class,'toilet_id');
    }
}
