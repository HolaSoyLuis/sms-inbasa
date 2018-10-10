<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //Variables para el estado del empleado
    const ACTIVO=1;
    const INACTIVO=2;
    const RETIRADO=3;
    const SUSPENDIDO=4;

}
