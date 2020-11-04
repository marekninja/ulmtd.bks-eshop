<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->foreign('real_customer_id', 'order_real_customer_id_fkey')->references('id')->on('customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('onetime_customer_id', 'order_onetime_customer_id_fkey')->references('id')->on('customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('payment_type', 'order_payment_type_fkey')->references('id')->on('payment')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('transport_type', 'order_transport_type_fkey')->references('id')->on('transport')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->dropForeign('order_real_customer_id_fkey');
			$table->dropForeign('order_onetime_customer_id_fkey');
			$table->dropForeign('order_payment_type_fkey');
			$table->dropForeign('order_transport_type_fkey');
		});
	}

}
