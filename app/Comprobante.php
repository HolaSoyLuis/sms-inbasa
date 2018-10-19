<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    //Variables para el estado del comprobante
    const PROCESADO=1;
    const IMPRESO=2;
    const ANULADO=3;
    const PAGADO=4;
}
