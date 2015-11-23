<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('product_name');
            $table->double('price',15,3);
            $table->text('description');
            $table->integer('size_id',false,true)->length(11);
            $table->foreign('size_id')->references('id')->on('size');
            $table->integer('cat_id',false,true)->length(11);
            $table->foreign('cat_id')->references('id')->on('category');

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
        Schema::drop('product');
    }
}
