<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_items', function (Blueprint $table) {
            $table->integer('shipment_id')->unsigned();
            $table->integer('order_item_id')->unsigned();
            $table->foreign('shipment_id')->references('shipment_id')->on('shipments');
            $table->foreign('order_item_id')->references('order_item_id')->on('order_items');
            $table->primary(array('shipment_id', 'order_item_id')); //primary key Setup
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
        Schema::dropIfExists('shipment_items');
    }
}
