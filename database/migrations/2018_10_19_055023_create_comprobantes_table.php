<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->increments('id');

            //Campos
            $table->string('serie');
            $table->float('descuento',2)->default(0.00);
            $table->float('total',8,2);
            $table->string('detalles',255)->nullable();
            $table->enum('estado',[
                \App\Comprobante::PROCESADO, \App\Comprobante::IMPRESO, \App\Comprobante::ANULADO, \App\Comprobante::PAGADO
            ])->default(\App\Comprobante::PROCESADO);

            //Llaves foráneas
            $table->unsignedInteger('empleado_id')->nullable();
            $table->foreign('empleado_id')->references('id')->on('empleados')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedInteger('forma_pago_id')->nullable();
            $table->foreign('forma_pago_id')->references('id')->on('forma_pagos')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedInteger('encargado_id')->nullable();
            $table->foreign('encargado_id')->references('id')->on('encargados')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('comprobantes');
    }
}
