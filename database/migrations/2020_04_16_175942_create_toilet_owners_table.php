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
            $table->string('mobileno')->unique();
            $table->string('profile')->nullable();
            $table->string('rating')->nullable();
            $table->enum('status', ['0', '1','-1'])->default('0')->comment('0-Not Active,1-Active','-1 Denied');
            $table->enum('auto_allocate', ['0', '1'])->default('1')->comment('0-Off,1-On');
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
