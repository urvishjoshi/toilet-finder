<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\City;
use App\Model\Country;
use App\Model\State;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'country_id' => function(){
            return Country::all()->random();
        },
        'state_id' => function(){
            return State::all()->random();
        },
    ];
});
