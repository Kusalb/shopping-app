<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('customer_id')->unsigned();
            $table->integer('order_status_code')->unsigned();
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('order_status_code')->references('order_status_code')->on('ref_order_status_codes');
            $table->date('date_order_placed');
            $table->string('order_details');
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
        Schema::dropIfExists('orders');
    }
}
