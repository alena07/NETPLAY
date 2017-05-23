<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGananciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganancias', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->integer('precio');
            $table->string('descuento', 45);
            $table->integer('reservaCancha_id')->unsigned();
            $table->foreign('reservaCancha_id')->references('id')->on('reservasCanchas');
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
        Schema::dropIfExists('ganancias');
    }
}
