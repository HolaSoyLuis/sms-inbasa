<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEncargadoEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargado_estudiante', function (Blueprint $table) {
            $table->increments('id');

            //Campos
            $table->string('parentesco',45);

            //Llaves foráneas
            $table->unsignedInteger('encargado_id')->nullable();
            $table->foreign('encargado_id')->references('id')->on('encargados')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedInteger('estudiante_id')->nullable();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('encargado_estudiante');
    }
}
