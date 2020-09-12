<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('feedback_id');
            $table->string('title');
            $table->string('body');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('fedback_id')->references('id')->on('feedbacks');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        chema::dropIfExists('publishes');
    }
}
