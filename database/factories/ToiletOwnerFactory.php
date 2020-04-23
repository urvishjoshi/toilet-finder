<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ToiletOwner;
use Faker\Generator as Faker;

$factory->define(ToiletOwner::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'mobileno' => $faker->numberBetween(6666666666,9999999999),
        'rating' => $faker->numberBetween(0,5),
        'status' => $faker->randomElement(['-1','0','1']),
        'auto_allocate' => $faker->randomElement(['1','0']),
    ];
});
