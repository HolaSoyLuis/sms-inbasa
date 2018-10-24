<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $table = 'centros';
    
    protected $fillable = [
        'nombre', 
        'direccion', 
        'departamento',
        'ciudad', 
        'nit', 
        'logo',
        'telefono1', 
        'telefono2',
    ];

    public function empleados(){//El centro educativo tiene muchos empleados
        return $this->hasMany(Empleado::class);
    }
}
