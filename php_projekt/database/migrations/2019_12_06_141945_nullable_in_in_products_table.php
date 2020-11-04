<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullableInInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {

            $table->text('popis')->nullable()->change();
            $table->decimal('cena', 10, 2)->nullable()->change();
            $table->string('ram',100)->nullable()->change();
            $table->string('vidlica',100)->nullable()->change();
            $table->string('tlmic',100)->nullable()->change();
            $table->string('kolesa',100)->nullable()->change();
            $table->string('predny_plast',100)->nullable()->change();
            $table->string('zadny_plast',100)->nullable()->change();
            $table->string('brzdy',100)->nullable()->change();
            $table->string('kluky',100)->nullable()->change();
            $table->string('stredove_zlozenie',100)->nullable()->change();
            $table->string('radenie',100)->nullable()->change();
            $table->string('prehadzovac',100)->nullable()->change();
            $table->string('kazeta',100)->nullable()->change();
            $table->string('retaz',100)->nullable()->change();
            $table->string('napinak_retaze',100)->nullable()->change();
            $table->string('sedlovka',100)->nullable()->change();
            $table->string('sedlo',100)->nullable()->change();
            $table->string('predstavec',100)->nullable()->change();
            $table->string('riadidla',100)->nullable()->change();
            $table->string('gripy',100)->nullable()->change();
            $table->string('hlavove_zlozenie',100)->nullable()->change();
            $table->string('pedale',100)->nullable()->change();
            $table->string('vaha',100)->nullable()->change();
            $table->string('farba',100)->nullable()->change();
            $table->string('name', 100)->nullable()->change();
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
    }
}
