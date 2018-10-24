<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncargadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargados', function (Blueprint $table) {
            $table->increments('id');

            //Campos
            $table->string('p_nombre',45);
            $table->string('s_nombre',45)->nullable();
            $table->string('p_apellido',45);
            $table->string('s_apellido',45)->nullable();
            $table->enum('genero',[
                'Masculino','Femenino'
            ]);
            $table->date('fecha_nac');
            $table->string('direccion',100)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('cui',25)->nullable();
            $table->text('foto',255)->nullable();

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
        Schema::dropIfExists('encargados');
    }
}
