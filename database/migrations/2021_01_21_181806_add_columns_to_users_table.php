<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bio',255)->default('No bio entered')->after('handle');
            $table->string('filename',100)->default('default/default_image.jpg')->after('bio');
            $table->softDeletes('deleted_at', 0)->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('bio');
          $table->dropColumn('filename');
          $table->dropColumn('deleted_at');
        });
    }
}
