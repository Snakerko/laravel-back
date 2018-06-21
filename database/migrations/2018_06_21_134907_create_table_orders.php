<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guid', 255)->nullable();
            $table->string('order', 255);
            $table->enum('type', ['order','sewing']);
            $table->string('name', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->dateTime('date');
            $table->string('shipper', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('shopping_center', 255)->nullable();
            $table->string('section', 255)->nullable();
            $table->string('contact_name', 255)->nullable();
            $table->string('device_prefix', 255)->nullable();
            $table->text('comment', 255)->nullable();
            $table->dateTime('pickup_date')->nullable();
            $table->string('deposit', 10)->nullable();
            $table->dateTime('nextcall_date')->nullable();
            $table->enum('currency', ['rur','cny', 'usd']);
            $table->boolean('syncStatus')->default(false);
            $table->boolean('extSyncStatus')->default(false);
            $table->dateTime('lastSync')->nullable();
            $table->dateTime('lastSync1C')->nullable();
            $table->boolean('ready')->default(false);
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
