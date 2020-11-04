<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifySubcats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcats', function (Blueprint $table) {
            $table->dropColumn('maincat_id');
            $table->unsignedInteger('main_cat_id')->nullable();
            $table->foreign('main_cat_id')->references('id')->on('main_cats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcats', function (Blueprint $table) {
            //
        });
    }
}
