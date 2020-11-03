<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_lines', function (Blueprint $table) {
            $table->id();
            // $table->integer('room_id')->unsigned();
            // $table->integer('user_id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('chat_id');
        });
        Schema::table('chat_lines',function($table){
            $table->foreign('user_id')->unsigned()->references('id')
                  ->on('users')->onDelete('cascade');
                });

        Schema::table('chat_lines',function($table){
            $table->foreign('chat_id')->unsigned()->references('id')
                  ->on('chats')->onDelete('cascade');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropForeign(['chat_id']);
       Schema::dropForeign(['user_id']);
        Schema::dropIfExists('chat_lines');
    }
}
