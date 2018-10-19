<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //Variables para el estado del estudiante
    const ACTIVO=1;
    const INACTIVO=2;
    const RETIRADO=3;
    const SUSPENDIDO=4;
}
