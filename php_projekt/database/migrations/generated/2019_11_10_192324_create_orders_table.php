<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('timestamp')->nullable();
			$table->boolean('set')->nullable();
			$table->decimal('cena', 10)->nullable();
			$table->integer('real_customer_id')->nullable();
			$table->integer('onetime_customer_id')->nullable();
			$table->integer('payment_type')->nullable();
			$table->integer('transport_type')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
