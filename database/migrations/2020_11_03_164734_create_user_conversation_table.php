<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserConversationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_conversation', function (Blueprint $table) {
            $table->id();
            // $table->integer('conv_id')->unsigned();
            // $table->integer('user_id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('conv_id');
        });
        Schema::table('user_conversation',function($table){
            $table->foreign('conv_id')->unsigned()->references('id')
                  ->on('conversation')->onDelete('cascade');
                });
       Schema::table('user_conversation',function($table){
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
       Schema::dropForeign(['conv_id']);
        Schema::dropIfExists('user_conversation');
    }
}
