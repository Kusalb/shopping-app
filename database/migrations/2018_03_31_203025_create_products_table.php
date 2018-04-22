<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('product_type_code')->unsigned();
            $table->foreign('product_type_code')->references('product_type_code')-> on ('ref_product_types');
            $table->string('return_merchandise_authorization_nr');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('product_description');
            $table->string('other_product_details');
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
        Schema::dropIfExists('products');
    }
}
