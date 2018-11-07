<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    protected $table = 'comprobantes';

    protected $fillable = [
        'serie',
        'descuento',
        'total',
        'detalles',
        'estado',
        'empleado_id',
        'forma_pago_id',
        'encargado_id',
    ];

    //Variables para el estado del comprobante
    const PROCESADO=1;
    const IMPRESO=2;
    const ANULADO=3;
    const PAGADO=4;

    public function detalle_comprobantes(){//Un comprobante tiene muchos detalles 
        return $this->hasMany(DetalleComprobante::class);
    }

    public function empleado(){//Un comprobante solo lo puede extender un solo empleado
        return $this->belongsTo(Comprobante::class);
    }

    public function encargado(){//Un comprobante le pertenece a un solo encargado
        return $this->belongsTo(Encargado::class);
    }

    public function forma_pago(){//Un comprobante solo tiene una forma de pagos
        return $this->belongsTo(FormaPago::class);
    }
}
