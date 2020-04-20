<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToiletOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toilet_owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('mobileno')->unique()->nullable();
            $table->string('complex_name')->nullable();
            $table->string('location_name')->nullable();
            $table->string('location_lati')->nullable();
            $table->string('location_long')->nullable();
            $table->string('address')->nullable();
            $table->string('price')->nullable();
            $table->string('rating')->nullable();
            $table->enum('status', ['0', '1'])->default('0')->comment('0-Not Active User,1-Active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toilet_owners');
    }
}
