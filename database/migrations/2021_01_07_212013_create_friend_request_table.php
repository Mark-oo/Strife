<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_request', function (Blueprint $table) {
            $table->id();
            $table->integer('first_user')->index();
            $table->integer('second_user')->index();
            $table->integer('acted_user')->index();
            $table->enum('status', ['pending', 'confirmed', 'blocked']);
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
        Schema::dropIfExists('friend_request');
    }
}
