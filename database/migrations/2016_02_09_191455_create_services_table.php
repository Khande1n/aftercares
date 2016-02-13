<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
			$table->string('brand');
			$table->string('product');
			$table->string('variant');
			$table->integer('age');
			$table->integer('pincode');
			$table->string('technician');
			$table->string('status');
			$table->integer('rating');
			$table->timestamps();
        });
		
		Schema::table('services', function (Blueprint $table) {
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
    	Schema::dropIfExists('services');
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
