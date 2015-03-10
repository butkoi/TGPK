<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('products',function($table){
           $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('orders',function($table){
            $table->foreign('shipping_address_id')->references('id')->on('shipping_addresses')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('order_items',function($table){
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('quote_items',function($table){
            $table->foreign('quote_id')->references('id')->on('quotes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('products',function($table){
           $table->dropForeign('products_category_id_foreign');
        });
        Schema::table('orders',function($table){
           $table->dropForeign('orders_shipping_address_id_foreign');
        });
        Schema::table('order_items',function($table){
           $table->dropForeign('order_items_order_id_foreign');
           $table->dropForeign('order_items_product_id_foreign');
        });
        Schema::table('quote_items',function($table){
           $table->dropForeign('quote_items_quote_id_foreign');
           $table->dropForeign('quote_items_product_id_foreign');
        });
	}

}
