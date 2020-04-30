<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('feedbacker_id')->comment('id of owner/user');
            $table->enum('feedbacker_type', ['1','2'])->comment('1-Owner,2-User');
            $table->text('subject');
            $table->text('desc');
            // $table->unsignedBigInteger('owner_id');
            // $table->foreign('owner_id')
            //         ->references('id')
            //         ->on('toilet_owners')
            //         ->onDelete('cascade');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')
            //         ->references('id')
            //         ->on('users')
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
        Schema::dropIfExists('feedback');
    }
}
