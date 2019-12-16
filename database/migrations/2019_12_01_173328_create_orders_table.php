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
            $table->bigIncrements('id');
            $table->string('customername');
            $table->string('phone');
            $table->string('email');
            $table->string('district')->nullable();
            $table->string('address');
            $table->string('foodname');
            $table->string('price');
            $table->string('quantity');
            $table->string('total')->nullable();
            $table->string('paymentmethod');
            $table->string('card')->nullable();
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
