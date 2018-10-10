<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            //Llaves foráneas
            $table->unsignedInteger('usuario_id')->nullable();;
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->unsignedInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->unsignedInteger('cargo_id')->nullable();;
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->unsignedInteger('centro_id')->nullable();;
            $table->foreign('centro_id')->references('id')->on('centros');

            //Campos
            $table->string('p_nombre',45);
            $table->string('s_nombre',45);
            $table->string('p_apellidos',45);
            $table->string('s_apellidos',45);
            $table->string('lugar_nac',100);
            $table->timestamp('fecha_nac');
            $table->string('estado_civil',45);
            $table->string('direccion',100)->nullable();;
            $table->timestamp('inicio_labores')->nullable();;
            $table->string('cui',25)->nullable();;
            $table->string('telefono',15)->nullable();;
            $table->string('correo',100)->nullable();
            $table->string('slug');
            $table->enum('estado',[
                \App\Empleado::ACTIVO, \App\Empleado::INACTIVO, \App\Empleado::SUSPENDIDO, \App\Empleado::RETIRADO
            ])->default(\App\Empleado::ACTIVO);
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
        Schema::dropIfExists('empleados');
    }
}
