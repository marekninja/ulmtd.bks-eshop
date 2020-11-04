<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSubcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcats', function (Blueprint $table) {
            $table->unsignedInteger('maincat_id')->nullable();
            $table->foreign('maincat_id')->references('id')->on('main_cats');
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
