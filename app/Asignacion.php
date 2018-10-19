<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    //Variables almacenar si estudiantes es nuevo o de reingreso
    const NUEVO=1;
    const REINGRESO=2;
}
