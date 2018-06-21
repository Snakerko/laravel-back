<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->string('name', 255);
            $table->string('brand', 255);
            $table->string('sku', 255);
            $table->string('color', 255);
            $table->string('purchase_price', 10);
            $table->string('sell_price', 10);
            $table->text('comment')->nullable();
            $table->string('composition', 255);
            $table->string('img', 255)->nullable();
            $table->string('care_symbols', 255);
            $table->integer('order');
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
        Schema::dropIfExists('orderitems');
    }
}
