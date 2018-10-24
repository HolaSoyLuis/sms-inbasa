<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    protected $table = 'forma_pagos';
    
    protected $fillable = [
        'forma', 
        'detalles',   
    ];

    public function comprobante(){//Un comprobante solo tendrá una forma de pago
        return $this->belongsTo(Comprobante::class);
    }
}