<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\City;
use App\Model\Country;
use App\Model\State;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Faker\Generator as Faker;

$factory->define(ToiletInfo::class, function (Faker $faker) {
    return [
        'owner_id' => function(){
        	return ToiletOwner::all()->random();
        },
        'toilet_name' => $faker->word,
        'price' => $faker->numberBetween(0,8),
        'complex_name' => $faker->word,
        'address' => $faker->streetAddress,
        'city_id' => function(){
            return City::all()->random();
        },
        'state_id' => function(){
            return State::all()->random();
        },
        'country_id' => function(){
            return Country::all()->random();
        },
        'toilet_lat' => $faker->numberBetween(00.6666,99.9999),
        'toilet_lng' => $faker->numberBetween(00.6666,99.9999),
        'type' => $faker->randomElement(['2','1','0']),
        'status' => $faker->randomElement(['1','0']),
    ];
});
