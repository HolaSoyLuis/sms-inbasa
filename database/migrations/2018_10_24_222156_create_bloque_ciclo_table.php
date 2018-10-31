<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloqueCicloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloque_ciclo', function (Blueprint $table) {
            $table->increments('id');

            //Llaves foráneas
            $table->unsignedInteger('ciclo_id')->nullable();
            $table->foreign('ciclo_id')->references('id')->on('ciclos')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedInteger('bloque_id')->nullable();
            $table->foreign('bloque_id')->references('id')->on('bloques')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('bloque_ciclo');
    }
}
