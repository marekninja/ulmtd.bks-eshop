<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('mainCat_id')->references('id')->on('main_cats');
            $table->foreign('subCat_id')->references('id')->on('subcats');
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('vyrobca_id')->references('id')->on('makers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_main_cats_id_foreign');
            $table->dropForeign('products_subCat_id_foreign');
            $table->dropForeign('products_image_id_foreign');
            $table->dropForeign('products_vyrobca_id_foreign');
        });
    }
}
