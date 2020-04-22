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
            $table->string('price')->nullable();
            $table->string('complex_name')->nullable();
            $table->string('address');
            $table->string('toilet_lat');
            $table->string('toilet_lng');
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
