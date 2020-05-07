<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToiletInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toilet_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('toilet_owners')
                    ->onDelete('cascade');
            $table->string('toilet_name');
            $table->unsignedBigInteger('price')->index()->fillable();
            $table->string('complex_name')->nullable();
            $table->string('address');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')
                    ->references('id')
                    ->on('states')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                    ->references('id')
                    ->on('countries')
                    ->onDelete('cascade');
            $table->string('toilet_lat')->nullable();
            $table->string('toilet_lng')->nullable();
            $table->enum('type', ['0', '1','2'])->default('2')->comment('0-Female,1-Male,2-Both');
            $table->enum('status', ['0', '1'])->default('0')->comment('0-Not Active,1-Active');
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
        Schema::dropIfExists('toilet_infos');
    }
}
