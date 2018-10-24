<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    protected $table = 'tipo_pagos';

    protected $fillable = [
        'tipo', 
        'costo',   
        'detalle',
    ];

    public function detalle_comprobante(){//Un tipo de pago estará en un solo detalle
        return $this->belongsTo(DetalleComprobante::class);
    }

}
