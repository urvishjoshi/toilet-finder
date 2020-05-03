<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\City;
use App\Model\Country;
use App\Model\State;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
	$country = Country::all()->random();
    $state = State::where('country_id',$country->id)->whereNotNull('country_id')->inRandomOrder()->first();
    if($state['id']==null)
    	$state['id']=1;

    return [
        'city' => $faker->city,
        'country_id' => $country->id,
        'state_id' => $state['id'],
    ];
});
