<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Add categories table
        Schema::create('categories', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('category_child_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Delete categories table
        Schema::drop('categories');
	}

}
