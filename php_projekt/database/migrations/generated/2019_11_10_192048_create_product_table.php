<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('maincat_id')->nullable();
			$table->integer('subcat_id')->nullable();
			$table->text('popis')->nullable();
			$table->integer('vyrobca_id')->nullable();
			$table->string('nazov', 100)->nullable();
			$table->decimal('cena', 10)->nullable();
			$table->string('ram', 100)->nullable();
			$table->string('vidlica', 100)->nullable();
			$table->string('tlmic', 100)->nullable();
			$table->string('kolesa', 100)->nullable();
			$table->string('predny_plast', 100)->nullable();
			$table->string('zadny_plast', 100)->nullable();
			$table->string('brzdy', 100)->nullable();
			$table->string('kluky', 100)->nullable();
			$table->string('stredove_zlozenie', 100)->nullable();
			$table->string('radenie', 100)->nullable();
			$table->string('prehadzovac', 100)->nullable();
			$table->string('kazeta', 100)->nullable();
			$table->string('retaz', 100)->nullable();
			$table->string('napinak_retaze', 100)->nullable();
			$table->string('sedlovka', 100)->nullable();
			$table->string('sedlo', 100)->nullable();
			$table->string('predstavec', 100)->nullable();
			$table->string('riadidla', 100)->nullable();
			$table->string('gripy', 100)->nullable();
			$table->string('hlavove_zlozenie', 100)->nullable();
			$table->string('pedale', 100)->nullable();
			$table->string('vaha', 100)->nullable();
			$table->string('farba', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
