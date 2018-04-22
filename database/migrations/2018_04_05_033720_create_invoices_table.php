<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('invoice_number');
            $table->integer('order_id')->unsigned();
            $table->integer('invoice_status_code')->unsigned();
            $table->foreign('order_id')->references('order_id')-> on ('orders');
            $table->foreign('invoice_status_code')->references('invoice_status_code')-> on ('ref_invoice_status_codes');
            $table->date('invoice_date');
            $table->string('invoice_details');
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
        Schema::dropIfExists('invoices');
    }
}