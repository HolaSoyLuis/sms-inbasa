<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            
            //Campos
            $table->float('total_bloque',8,2);
            $table->string('detalles',200)->nullable();

            //Llaves foráneas
            $table->unsignedInteger('asignacion_id')->nullable();
            $table->foreign('asignacion_id')->references('id')->on('asignaciones')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('notas');
    }
}
