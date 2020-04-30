<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use App\Model\ToiletUsageInfo;
use App\User;
use Faker\Generator as Faker;

$factory->define(ToiletUsageInfo::class, function (Faker $faker) {
    return [
        'transaction_id' => $faker->unique()->numberBetween(000000,999999),
        'owner_id' => function(){
        	return ToiletOwner::all()->random();
        },
        'user_id' => function(){
        	return User::all()->random();
        },
        'toilet_id' => function(){
        	return ToiletInfo::all()->random();
        },
        'status' => $faker->randomElement(['1','0']),
        // 'price' => function(){
        // 	return ToiletOwner::all()->random();
        // },
    ];
});
