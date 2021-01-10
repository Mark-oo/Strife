<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends_users', function (Blueprint $table) {
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('friend_id');

        });
        Schema::table('friends_users', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->unsigned()
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
        Schema::table('friends_users', function (Blueprint $table) {
            $table->foreign('friend_id')
                  ->unsigned()
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['user_id']);
        Schema::dropForeign(['chat_id']);
        Schema::dropIfExists('friends_users');
    }
}
