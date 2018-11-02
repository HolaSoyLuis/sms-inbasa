@extends('layouts.app')
@section('title', 'Detalle comprobante')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('detalle_comprobante.index') }}">Lista de detalles de comprobantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('detalle_comprobante.create') }}">Nuevo detalle de comprobante</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <center>
        <h3>Registro del detalle de comprobante</h3>
      </center>
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
</div>
</div>
</div>

@endsection
