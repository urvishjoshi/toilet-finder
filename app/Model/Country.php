<?php

namespace App\Model;

use App\Model\ToiletInfo;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country'];

    public function toilets()
    {
    	return $this->hasMany(ToiletInfo::class,'country_id');
    }
}
