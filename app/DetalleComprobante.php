<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleComprobante extends Model
{
    protected $table = 'detalle_comprobantes';

    protected $fillable = [
        'cantidad', 
        'costo',   
        'mes', 
        'comprobante_id',  
        'asignacion_id', 
        'tipo_pago_id',  
    ];

    public function tipo_pago(){//Un detalle solo incluirá solo tipo de pago (Colegiatura, Inscripcion,etc)
        return $this->belongsTo(TipoPago::class);
    }

    public function comprobante(){//Un detalle le pertenece solo a un comprobante
        return $this->belongsTo(Comprobante::class);
    }

    public function asignacion(){//Un detalle le pertenece únicamente a una asignación
        return $this->belongsTo(Asignacion::class);
    }
}
