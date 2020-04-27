<?php

namespace App\Model;

use App\Model\City;
use App\Model\Country;
use App\Model\Rating;
use App\Model\State;
use App\Model\ToiletOwner;
use Illuminate\Database\Eloquent\Model;

class ToiletInfo extends Model
{
    protected $fillable = [
        'owner_id', 'toilet_name','price','complex_name','address','toilet_lat','toilet_lng','status',
    ];

    public function getFullAddress()
    {
        // $address =  $this->city;
        // $address =  $address.", ".$this->state;
        return $address = ", ".$this->city['city'].", ".$this->state['state'].", ".$this->country['country'];
    }
    public function getAverageRating()
    {
        return $this->ratings->count() > 0 ? round($this->ratings->sum('rating')/$this->ratings->count(),1) : 0;
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
}
