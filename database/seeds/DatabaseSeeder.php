<?php

use App\Model\City;
use App\Model\Country;
use App\Model\Feedback;
use App\Model\Rating;
use App\Model\State;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use App\Model\ToiletUsageInfo;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,20)->create();
        factory(App\Model\Country::class,10)->create();
        factory(App\Model\State::class,20)->create();
        factory(App\Model\City::class,50)->create();
        factory(App\Model\ToiletOwner::class,10)->create();
        factory(App\Model\ToiletInfo::class,20)->create();
        factory(App\Model\ToiletUsageInfo::class,50)->create();
        factory(App\Model\Rating::class,50)->create();
        factory(App\Model\Feedback::class,50)->create();
    }
}
