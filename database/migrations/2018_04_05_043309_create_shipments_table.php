<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('shipment_id');
            $table->integer('order_id')->unsigned();
            $table->integer('invoice_number')->unsigned();
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('invoice_number')->references('invoice_number')->on('invoices');
            $table->integer('shipment_tracking_number');
            $table->date('shipment_date');
            $table->string('other_shipment_details');
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
        Schema::dropIfExists('shipments');
    }
}
