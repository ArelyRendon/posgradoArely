<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductividadesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('archivo');
            $table->boolean('visible');
            $table->integer('idocupacion')->unsigned();
            $table->foreign('idocupacion')->references('id')->on('ocupaciones');
            $table->integer('iddocente')->unsigned()->nullable($value = true);
            $table->foreign('iddocente')->references('id')->on('docentes');
            $table->integer('idalumno')->unsigned()->nullable($value = true);
            $table->foreign('idalumno')->references('id')->on('alumnos');
            $table->integer('idlgac')->unsigned();
            $table->foreign('idlgac')->references('id')->on('lgacs');
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
        Schema::dropIfExists('productividades');
    }
}
