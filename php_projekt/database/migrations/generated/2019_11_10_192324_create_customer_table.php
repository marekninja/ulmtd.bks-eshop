<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('meno', 30)->nullable();
			$table->string('priezvisko', 50)->nullable();
			$table->string('heslo', 60)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('phone_number', 20)->nullable();
			$table->string('ulica_a_cd', 50)->nullable();
			$table->string('psc', 10)->nullable();
			$table->string('krajina', 30)->nullable();
			$table->integer('role_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
