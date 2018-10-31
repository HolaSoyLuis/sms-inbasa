<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');

            //Campos
            $table->string('p_nombre',45);
            $table->string('s_nombre',45);
            $table->string('t_nombre',45)->nullable();
            $table->string('p_apellido',45);
            $table->string('s_apellido',45);
            $table->string('codigo', 20);

            $table->enum('genero',[
                'Masculino','Femenino'
            ]);
            $table->date('fecha_nac');
            $table->string('direccion',100)->nullable();
            $table->text('foto',255)->nullable();
            $table->enum('estado',[
                \App\Estudiante::ACTIVO, \App\Estudiante::INACTIVO, \App\Estudiante::SUSPENDIDO, \App\Estudiante::RETIRADO
            ])->default(\App\Estudiante::ACTIVO);

            //Llaves foráneas
            $table->unsignedInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('estudiantes');
    }
}
