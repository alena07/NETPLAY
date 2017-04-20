<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsSoccerFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasCanchas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fechaInicial');
            $table->dateTime('fechaFinal');
            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->integer('cancha_id')->unsigned();
            $table->foreign('cancha_id')->references('id')->on('canchas');
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
        Schema::dropIfExists('reservasCanchas');
    }
}
