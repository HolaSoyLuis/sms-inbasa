<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_notas', function (Blueprint $table) {
            $table->increments('id');
            //Llaves foráneas
            $table->unsignedInteger('nota_id');
            $table->foreign('nota_id')->references('id')->on('notas');
            $table->unsignedInteger('aspecto_id')->nullable();
            $table->foreign('aspecto_id')->references('id')->on('aspectos');
            $table->unsignedInteger('tipo_evaluacion_id')->nullable();
            $table->foreign('tipo_evaluacion_id')->references('id')->on('tipo_evaluaciones');
            $table->unsignedInteger('bimestre_id')->nullable();
            $table->foreign('bimestre_id')->references('id')->on('bimestres');
            $table->unsignedInteger('estudiante_id')->nullable();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');

            //Campos
            $table->float('nota',2);
            $table->dateTime('fecha_ingreso');
            $table->softDeletes();
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
        Schema::dropIfExists('detalle_notas');
    }
}
