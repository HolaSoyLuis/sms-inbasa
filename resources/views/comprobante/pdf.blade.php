<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/pdf.css">
    <title>Comprobante: {{ $compro->serie }}</title>
</head>
<body>
<center><h1>Instituto nacional por cooperativa de San Andres Chapil</h1></center>
<p>Serie: {{$compro->serie}}</p>
<p>Total: {{$compro->total}}</p>
<p>Detalles: {{$compro->detalles}}</p>
<p>Estado: 
    @if ($compro->estado == 1)          
		    PROCESADO
		@elseif ($compro->estado == 2)
		    IMPRESO
		@elseif ($compro->estado == 3)
		    ANULADO
		@elseif ($compro->estado == 4)
            PAGADO
	@endif
</p>
<p>Empleado: 
    @foreach($empleados as $e)
		@if($e->id == $compro->empleado_id)
			{{$e->p_nombre}} {{$e->p_apellido}}
		@endif
	@endforeach
</p>
<p>Forma de pago: 
    @foreach($formapagos as $fp)
		@if($fp->id == $compro->forma_pago_id)
			{{$fp->forma}}
		@endif
	@endforeach
</p>
<p>Encargado: 
    @foreach($encargados as $e)
		@if($e->id == $compro->encargado_id)
			{{$e->p_nombre}} {{$e->s_nombre}} {{$e->p_apellido}} {{$e->s_apellido}}
		@endif
	@endforeach
</p>
</body>
</html>