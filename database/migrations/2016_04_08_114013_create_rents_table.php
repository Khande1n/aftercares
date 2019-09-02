<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
			$table->string('product');
			$table->string('brand');
			$table->string('variant');
			$table->integer('age');
			$table->string('address');
			$table->string('status');
			$table->integer('rental');
			$table->timestamps();
        });
		
		Schema::table('rents', function (Blueprint $table) {
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users');
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
    	Schema::dropIfExists('rents');
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
