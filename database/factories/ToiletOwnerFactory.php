<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ToiletOwner;
use Faker\Generator as Faker;

$factory->define(ToiletOwner::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', // password
        'mobileno' => $faker->numberBetween(6666666666,9999999999),
        'rating' => $faker->numberBetween(0,5),
        'status' => $faker->randomElement(['-1','0','1']),
        'auto_allocate' => $faker->randomElement(['1','0']),
    ];
});
