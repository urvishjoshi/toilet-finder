<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\City;
use App\Model\Country;
use App\Model\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
	$country = Country::all()->random();
    return [
        'state' => $faker->state,
        'country_id' => $country->id,
    ];
});
