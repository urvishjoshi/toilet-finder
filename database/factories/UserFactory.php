<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', // password
        'mobileno' => $faker->numberBetween(6666666666,9999999999),
        'gender' => $faker->randomElement(['1','0']),
        'age' => $faker->numberBetween(18,80),

    ];
});
