<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('order_item_id');
            $table->integer('product_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('order_item_status_code')->unsigned();
            $table->foreign('product_id')->references('product_id')-> on ('products');
            $table->foreign('order_id')->references('order_id')-> on ('orders');
            $table->foreign('order_item_status_code')->references('order_item_status_code')-> on ('ref_order_item_status_codes');
            $table->integer('order_item_quantity');
            $table->integer('order_item_price');
            $table->integer('rma_number');
            $table->string('rma_issued_by');
            $table->date('rma_issued_date');
            $table->string('other_order_item_details');
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
        Schema::dropIfExists('order_items');
    }
}
