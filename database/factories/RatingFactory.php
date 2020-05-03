<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Rating;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use App\User;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'owner_id' => function(){
        	return ToiletOwner::all()->random();
        },
        'toilet_id' => function(){
        	return ToiletInfo::all()->random();
        },
        'user_id' => function(){
        	return User::all()->random();
        },
        'rating' => $faker->numberBetween(1,5),
        'desc' => $faker->paragraph,
    ];
});
