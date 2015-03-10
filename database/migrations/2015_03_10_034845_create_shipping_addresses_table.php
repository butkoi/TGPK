<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create( 'shipping_addresses', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('street');
            $table->string('city');
            $table->string('email');
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
        Schema::drop( 'shipping_addresses');
	}

}
