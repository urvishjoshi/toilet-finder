<?php

use App\User;
use App\Model\ToiletOwner;
use App\Model\ToiletInfo;
use App\Model\ToiletUsageInfo;
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
        factory(App\Model\ToiletOwner::class,10)->create();
        factory(App\Model\ToiletInfo::class,20)->create();
        factory(App\Model\ToiletUsageInfo::class,10)->create();
    }
}
