<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Feedback;
use App\Model\ToiletOwner;
use App\User;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    return [
        'feedbacker_id' => $faker->randomElement([
	        	function(){
		        	return ToiletOwner::all()->random();
		        } , 
		        function(){
		        	return User::all()->random();
		        }
		    ]),
        'feedbacker_type' => $faker->randomElement(['1','2']),
	    'subject' => $faker->sentence,
	    'desc' => $faker->text,
    ];
});
