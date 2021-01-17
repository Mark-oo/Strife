<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendships', function (Blueprint $table) {
            $table->id();
            $table->integer('first_user')->index();
            $table->integer('second_user')->index();
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['pending', 'confirmed', 'blocked']);
            $table->timestamps();
        });
        Schema::table('friendships',function($table){
            $table->foreign('user_id')->unsigned()->references('id')
                  ->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropForeign(['second_user']);
        Schema::dropIfExists('friendships');
    }
}
