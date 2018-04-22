<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('organisation_or_person');
            $table->char('gender');
            $table->string('first_name');
            $table->string('middle_initial')->nullable();
            $table->string('last_name');
            $table->string('email_address');
            $table->string('login_name');
            $table->string('login_password');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('address_line_3')->nullable();
            $table->string('address_line_4')->nullable();
            $table->string('town_city')->nullable();
            $table->string('county')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
