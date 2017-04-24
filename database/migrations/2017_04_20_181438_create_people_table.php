<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombres', 45);
            $table->String('apellidos', 45);
            $table->integer('cedula')->unique();
            $table->enum('tipo', ['A', 'C']);
            $table->String('telefono', 20);
            $table->String('usuario', 45);
            $table->String('contrasenia', 45);
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
        Schema::dropIfExists('personas');
    }
}
