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

            //Llaves foráneas
            $table->unsignedInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->unsignedInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');

            //Campos
            $table->string('p_nombre',45);
            $table->string('s_nombre',45);
            $table->string('p_apellido',45);
            $table->string('s_apellido',45);
            $table->date('fecha_nac');
            $table->string('direccion',100)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('cui',25)->nullable();
            $table->text('foto',300);
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
        Schema::dropIfExists('encargados');
    }
}
