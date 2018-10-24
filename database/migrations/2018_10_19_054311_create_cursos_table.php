<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
           
            //Campos
            $table->string('codigo',45);
            $table->string('nombre',45);
            $table->string('descripcion',100)->nullable();
            $table->enum('estado',[
                \App\Curso::ACTIVO, \App\Curso::INACTIVO
            ])->default(\App\Curso::ACTIVO);

             //Llaves foráneas
            $table->unsignedInteger('grado_id')->nullable();
            $table->foreign('grado_id')->references('id')->on('grados')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedInteger('docente_id')->nullable();
            $table->foreign('docente_id')->references('id')->on('empleados')->onUpdate('cascade')->onDelete('set null');
            
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
        Schema::dropIfExists('cursos');
    }
}
