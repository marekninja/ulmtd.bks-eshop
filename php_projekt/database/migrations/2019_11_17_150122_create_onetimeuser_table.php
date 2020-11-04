<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnetimeuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onetimeusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('meno', 30);
            $table->string('priezvisko', 50);
            $table->string('phone_number', 20);
            $table->string('ulica_a_cd', 50);
            $table->string('psc', 10);
            $table->string('krajina', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onetimeusers');
    }
}
