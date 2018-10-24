<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    
    protected $fillable = [
        'hora_inicio', 
        'hora_fin',   
    ];

    public function detalle_horarios(){//Un horario va a estar en muchos detalles
        return $this->hasMany(DetalleHorario::class);
    }
}
