<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->increments('id');
            //Llaves foráneas
            $table->unsignedInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->unsignedInteger('ciclo_id')->nullable();
            $table->foreign('ciclo_id')->references('id')->on('ciclos');
            $table->unsignedInteger('grado_id')->nullable();
            $table->foreign('grado_id')->references('id')->on('grados');
            $table->unsignedInteger('seccion_id')->nullable();
            $table->foreign('seccion_id')->references('id')->on('secciones');

            //Campos
            $table->dateTime('fecha_asignacion');
            $table->enum('nuevo_reingreso',[
                \App\Asignacion::NUEVO, \App\Asignacion::REINGRESO
            ])->default(\App\Asignacion::NUEVO);
            $table->text('certificado',300);
            $table->integer('clave');
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
        Schema::dropIfExists('asignaciones');
    }
}
