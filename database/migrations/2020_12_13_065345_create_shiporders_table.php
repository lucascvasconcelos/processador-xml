<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiporders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pessoa')->unsigned();
            $table->foreign('pessoa')->references('id')->on('pessoas');
            $table->bigInteger('shipto_id')->unsigned();
            $table->foreign('shipto_id')->references('id')->on('shiptos');
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
        Schema::dropIfExists('shiporders');
    }
}
