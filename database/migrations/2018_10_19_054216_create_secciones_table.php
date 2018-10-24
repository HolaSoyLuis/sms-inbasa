<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones', function (Blueprint $table) {
            $table->increments('id');
            
            //Campos
            $table->string('seccion',45);
            $table->enum('estado',[
                \App\Seccion::ACTIVO, \App\Seccion::INACTIVO
            ])->default(\App\Seccion::ACTIVO);

            //Llaves foráneas
            $table->unsignedInteger('grado_id')->nullable();
            $table->foreign('grado_id')->references('id')->on('grados')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('secciones');
    }
}
