<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/pdf.css">
    <title>Detalle de Comprobante: {{ $detallecomprobante->id }}</title>
</head>
<body>
<center><h1>Instituto nacional por cooperativa de San Andres Chapil</h1></center>
<label>ID del comprobante:</label>
<p>{{$detallecomprobante->id}}</p>
<label>Cantidad:</label>
<p>{{$detallecomprobante->cantidad}}</p>
<label>Costo:</label>
<p>{{$detallecomprobante->costo}}</p>
<label>Mes:</label>
<p>{{$detallecomprobante->mes}}</p>
@foreach($asignaciones as $asignacion)
  @if($asignacion->id == $detallecomprobante->asignacion_id)
    @foreach($estudiantes as $estudiante)
      @if($estudiante->id == $asignacion->estudiante_id)
      <label>Asignacion:</label>
        <p>Fecha:{{ $asignacion['fecha_asignacion'] }} Estudiante:{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</p>
      @endif
    @endforeach
  @endif
@endforeach
@foreach($comprobantes as $comprobante)
  @if($comprobante->id == $detallecomprobante->comprobante_id)
  <label>Comprobante:</label>
    <p>No. Serie:{{ $comprobante['serie']}} Total:{{ $comprobante['total']}}</p>
  @endif
@endforeach
@foreach($tipopagos as $tipopago)
  @if($tipopago->id == $detallecomprobante->tipo_pago_id)
  <label>Tipo de pago</label>
    <p>{{ $tipopago['tipo'] }}</p>
  @endif
@endforeach
</body>
</html>