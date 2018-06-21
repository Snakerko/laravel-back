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
            $table->varchar('guid', 255)->nullable();
            $table->varchar('order', 255);
            $table->enum('type', ['order','sewing']);
            $table->varchar('name', 255);
            $table->varchar('city', 255);
            $table->dateTime('date')->nullable();
            $table->varchar('shipper', 255)->nullable();
            $table->varchar('phone', 255)->nullable();
            $table->varchar('shopping_center', 255)->nullable();
            $table->varchar('section', 255)->nullable();
            $table->varchar('contact_name', 255)->nullable();
            $table->varchar('device_prefix', 255)->nullable();
            $table->text('comment', 255);
            $table->dateTime('pickup_date')->nullable();
            $table->varchar('deposit', 10);
            $table->dateTime('nextcall_date')->nullable();
            $table->enum('currency', ['rur','cny', 'usd']);
            $table->tinyInteger('syncStatus', 1)->default(0);
            $table->tinyInteger('extSyncStatus', 1)->default(0);
            $table->dateTime('lastSync')->nullable();
            $table->dateTime('lastSync1C')->nullable();
            $table->tinyInteger('ready', 1)->default(0);
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
