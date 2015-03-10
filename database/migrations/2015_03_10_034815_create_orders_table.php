<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('orders',function($table){
           $table->increments('id');
           $table->decimal('total_price',6,2);
           $table->string('type_of_payment',6,2);
           $table->string('status');
           $table->integer('shipping_address_id')->unsigned();
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
        Schema::drop('orders');
	}

}
