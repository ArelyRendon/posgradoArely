<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TesisMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tesis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('resumen');
            $table->string('temas');
            $table->integer('año');
            $table->string('archivo');
            $table->boolean('visible');
            $table->integer('idegresado')->unsigned();
            $table->foreign('idegresado')->references('id')->on('alumnos');
            $table->integer('idlgac')->unsigned();
            $table->foreign('idlgac')->references('id')->on('lgacs');
            $table->integer('iddocente')->unsigned();
            $table->foreign('iddocente')->references('id')->on('docentes');
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
        Schema::dropIfExists('tesis');
    }
}
