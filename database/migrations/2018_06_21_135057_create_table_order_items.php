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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->varchar('name', 255);
            $table->varchar('brand', 255);
            $table->varchar('sku', 255);
            $table->varchar('color', 255);
            $table->varchar('purchase_price', 10);
            $table->varchar('sell_price', 10);
            $table->text('comment')->nullable();
            $table->varchar('composition', 255);
            $table->varchar('img', 255)->nullable();
            $table->varchar('care_symbols', 255);
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
