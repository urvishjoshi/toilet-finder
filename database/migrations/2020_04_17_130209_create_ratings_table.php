<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('t_ownerId');
            $table->foreign('t_ownerId')
                    ->references('id')
                    ->on('toilet_owners')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->string('rating')->nullable();
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('ratings');
    }
}
