<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoRentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_rents', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('rent_id')->unsigned();
			$table->foreign('rent_id')->references('id')->on('rents')->onDelete('cascade');
			$table->string('path');
			$table->string('thumbnail_path');
			$table->timestamps();
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
    	Schema::dropIfExists('photo_rents');
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
