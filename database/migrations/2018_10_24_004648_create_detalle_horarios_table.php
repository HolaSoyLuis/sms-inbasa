<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_horarios', function (Blueprint $table) {
            $table->increments('id');

             //Llaves foráneas
            $table->unsignedInteger('dia_id')->nullable();
            $table->foreign('dia_id')->references('id')->on('dias')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('horario_id')->nullable();
            $table->foreign('horario_id')->references('id')->on('horarios')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('seccion_id')->nullable();
            $table->foreign('seccion_id')->references('id')->on('secciones')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('curso_id')->nullable();
            $table->foreign('curso_id')->references('id')->on('cursos')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('detalle_horarios');
    }
}
