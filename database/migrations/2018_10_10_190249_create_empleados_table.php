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

            //Campos
            $table->string('p_nombre',45);
            $table->string('s_nombre',45);
            $table->string('p_apellido',45);
            $table->string('s_apellido',45);
            $table->enum('genero',[
                'Masculino','Femenino'
            ]);
            $table->date('fecha_nac');
            $table->string('lugar_nac',100);
            $table->string('estado_civil',45);
            $table->string('direccion',100)->nullable();
            $table->timestamp('inicio_labores');
            $table->string('cui',25);
            $table->string('telefono',15)->nullable();
            $table->string('correo',100)->nullable();
            $table->text('foto',255)->nullable();
            $table->enum('estado',[
                \App\Empleado::ACTIVO, \App\Empleado::INACTIVO, \App\Empleado::SUSPENDIDO, \App\Empleado::RETIRADO
            ])->default(\App\Empleado::ACTIVO);

             //Llaves foráneas
            $table->unsignedInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedInteger('cargo_id')->nullable();
            $table->foreign('cargo_id')->references('id')->on('cargos')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedInteger('centro_id')->nullable();
            $table->foreign('centro_id')->references('id')->on('centros')->onUpdate('cascade')->onDelete('set null');
            
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
