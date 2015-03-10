<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('products',function($table){
            $table->increments('id');
            $table->integer('qty')->unsigned();
            $table->string('color');
            $table->decimal('price',6,2);
            $table->integer('category_id')->unsigned();
            $table->boolean('is_featured');
            $table->timestamp('new_from_date');
            $table->timestamp('new_end_date');
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
		//
        Schema::drop('products');
	}

}
