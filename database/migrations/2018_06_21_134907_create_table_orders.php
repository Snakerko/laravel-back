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
            $table->DATETIME('date')->nullable();
            $table->varchar('shipper', 255)->nullable();
            $table->varchar('phone', 255)->nullable();
            $table->varchar('shopping_center', 255)->nullable();
            $table->varchar('section', 255)->nullable();
            $table->varchar('contact_name', 255)->nullable();
            $table->varchar('device_prefix', 255)->nullable();
            $table->text('comment', 255);
            $table->DATETIME('pickup_date')->nullable();
            $table->varchar('deposit', 10);
            $table->DATETIME('nextcall_date')->nullable();
            $table->enum('currency', ['rur','cny', 'usd']);
            $table->tinyInt('syncStatus', 1)->default(0);
            $table->tinyInt('extSyncStatus', 1)->default(0);
            $table->DATETIME('lastSync')->nullable();
            $table->DATETIME('lastSync1C')->nullable();
            $table->tinyInt('ready', 1)->default(0);
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
