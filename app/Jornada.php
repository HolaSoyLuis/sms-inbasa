<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornadas';

    protected $fillable = [
        'jornada', 
    ];

    public function grados(){//Una jornada puede estar en muchos grados
        return $this->hasMany(Grado::class);
    }
}
