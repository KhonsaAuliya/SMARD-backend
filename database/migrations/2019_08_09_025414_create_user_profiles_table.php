<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('name',100);
            $table->string('birthday',50);
            $table->string('birthplace',50);
            $table->string('gender',20);
            $table->string('religion',20);
            $table->text('address');
            $table->string('job',50);
            $table->string('company',100);
            $table->text('desc');
            $table->string('avatar',250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profile', function (Blueprint $table) {
          $table->dropForeign(['users_id']);
        });
        Schema::dropIfExists('user_profiles');
    }
}
