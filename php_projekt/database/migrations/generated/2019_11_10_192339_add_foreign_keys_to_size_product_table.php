<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSizeProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('size_product', function(Blueprint $table)
		{
			$table->foreign('size_id', 'size_product_size_id_fkey')->references('id')->on('size')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('size_product', function(Blueprint $table)
		{
			$table->dropForeign('size_product_size_id_fkey');
		});
	}

}
