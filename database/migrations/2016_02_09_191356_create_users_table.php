<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('contact')->unique();
            $table->string('password', 60);
            $table->text('address');
            $table->rememberToken();
            $table->timestamps();
        });
		
		Schema::table('users', function (Blueprint $table) {
			$table->integer('role_id')->unsigned()->index();
			$table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	Schema::dropIfExists('users');
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
