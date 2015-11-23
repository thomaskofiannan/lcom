<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id',false,true)->length(10)->unsigned();
            $table->foreign('product_id')->references('id')->on('product');
            $table->integer('order_id',false,true)->length(10)->unsigned();
            $table->foreign('order_id')->references('id')->on('order');
            $table->integer('quantity');
            $table->double('product_price');
            $table->string('wishlist');
            $table->string('status');

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
        Schema::drop('order');
    }
}
