<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            // $table->integer('chat_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('chat_id');
            $table->timestamps();
        });
        Schema::table('message',function($table){
            $table->foreign('chat_id')->unsigned()->references('id')
                  ->on('chats')->onDelete('cascade');
        });
        Schema::table('message',function($table){
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
        Schema::dropForeign(['user_id']);
        Schema::dropForeign(['chat_id']);
        Schema::dropIfExists('message');
    }
}
