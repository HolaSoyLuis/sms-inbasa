<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $table = 'dias';

    protected $fillable = [
        'dia', 
    ];

    public function detalle_horarios(){//Un día puede estar en muchos detalles de horarios
        return $this->hasMany(DetalleHorario::class);
    }
}
