<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';

    protected $fillable = [
        'cargo', 
    ];
    
    public function empleados(){//Un cargo le puede pertenecer a muchos empleados
        return $this->hasMany(Empleado::class);
    }
}
