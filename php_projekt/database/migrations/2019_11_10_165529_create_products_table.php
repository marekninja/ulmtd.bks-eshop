<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('mainCat_id');
            $table->unsignedInteger('subCat_id');
            $table->unsignedInteger('image_id');
            $table->text('popis');
            $table->unsignedInteger('vyrobca_id');
            $table->decimal('cena', 10, 2);
            $table->string('ram',100);
            $table->string('vidlica',100);
            $table->string('tlmic',100);
            $table->string('kolesa',100);
            $table->string('predny_plast',100);
            $table->string('zadny_plast',100);
            $table->string('brzdy',100);
            $table->string('kluky',100);
            $table->string('stredove_zlozenie',100);
            $table->string('radenie',100);
            $table->string('prehadzovac',100);
            $table->string('kazeta',100);
            $table->string('retaz',100);
            $table->string('napinak_retaze',100);
            $table->string('sedlovka',100);
            $table->string('sedlo',100);
            $table->string('predstavec',100);
            $table->string('riadidla',100);
            $table->string('gripy',100);
            $table->string('hlavove_zlozenie',100);
            $table->string('pedale',100);
            $table->string('vaha',100);
            $table->string('farba',100);
            $table->string('name', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
