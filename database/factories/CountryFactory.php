<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'country' => $faker->country,
    ];
});
