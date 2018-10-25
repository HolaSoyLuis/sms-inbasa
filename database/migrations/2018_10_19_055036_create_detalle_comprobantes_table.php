<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_comprobantes', function (Blueprint $table) {
            $table->increments('id');

            //Campos
            $table->integer('cantidad');
            $table->float('costo',8,2);
            $table->string('mes',45);

            //Llaves foráneas
            $table->unsignedInteger('comprobante_id')->nullable();
            $table->foreign('comprobante_id')->references('id')->on('comprobantes')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('asignacion_id');
            $table->foreign('asignacion_id')->references('id')->on('asignaciones')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('tipo_pago_id');
            $table->foreign('tipo_pago_id')->references('id')->on('tipo_pagos')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('detalle_comprobantes');
    }
}
