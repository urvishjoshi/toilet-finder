<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToiletUsageInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toilet_usage_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transaction_id')->unique();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('toilet_owners')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('toilet_id');
            $table->foreign('toilet_id')
                    ->references('id')
                    ->on('toilet_infos')
                    ->onDelete('cascade');
            $table->enum('status', ['0', '1','-1'])->default('0')->comment('0-Pending,1-Done,-1:Rejected');
            // $table->unsignedBigInteger('price')->fillable();
            // $table->foreign('price')
            //         ->references('price')
            //         ->on('toilet_infos')
            //         ->onDelete('cascade');
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
        Schema::dropIfExists('toilet_usage_infos');
    }
}
