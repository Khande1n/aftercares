<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->increments('id');
			$table->string('variant');
            $table->timestamps();
        });
		
		// Schema::table('variants', function (Blueprint $table) {
			// $table->integer('product_id')->unsigned()->index();
			// $table->foreign('product_id')->references('id')->on('products');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	Schema::dropIfExists('variants');
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
