<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

        Schema::create("quote_items", function ($table) {
            $table->increments('id');
            $table->integer('quote_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('name');
            $table->integer('qty');
            $table->decimal('price',6,2);
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
        Schema::drop("quote_items");
	}

}
