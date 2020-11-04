<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('real_customer_id')->references('id')->on('customers');
            $table->foreign('onetime_customer_id')->references('id')->on('customers');
            $table->foreign('payment_type')->references('id')->on('payments');
            $table->foreign('transport_type')->references('id')->on('transports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_real_customer_id_foreign');
            $table->dropForeign('orders_onetime_customer_id_foreign');
            $table->dropForeign('orders_payment_type_foreign');
            $table->dropForeign('orders_transport_type_foreign');
        });
    }
}
