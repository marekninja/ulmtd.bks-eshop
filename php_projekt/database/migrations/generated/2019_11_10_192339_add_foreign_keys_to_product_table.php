<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->foreign('maincat_id', 'product_maincat_id_fkey')->references('id')->on('maincat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subcat_id', 'product_subcat_id_fkey')->references('id')->on('subcat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('vyrobca_id', 'product_vyrobca_id_fkey')->references('id')->on('maker')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->dropForeign('product_maincat_id_fkey');
			$table->dropForeign('product_subcat_id_fkey');
			$table->dropForeign('product_vyrobca_id_fkey');
		});
	}

}
