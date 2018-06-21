<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderitemsizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitemsizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id', 255)->unsigned();
            $table->varchar('name', 255);
            $table->varchar('size', 255)->nullable();
            $table->integer('quantity')->unsigned();
            $table->tinyInteger('completed', 1)->default(0);
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
        Schema::dropIfExists('orderitemsizes');
    }
}
