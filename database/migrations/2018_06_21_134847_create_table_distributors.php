<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDistributors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->increments('id');
            $table->char('guid', 36)->nullable();
            $table->char('name', 255);
            $table->varchar('city', 255)->nullable();
            $table->varchar('address', 255)->nullable();
            $table->varchar('phone', 255)->nullable();
            $table->varchar('shopping_center', 255)->nullable();
            $table->varchar('section', 255)->nullable();
            $table->varchar('contact_name', 255)->nullable();
            $table->varchar('synonyms', 1000)->nullable();
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
        Schema::dropIfExists('distributors');
    }
}
