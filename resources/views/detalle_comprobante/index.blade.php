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
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Cantidad</td>
          <td>Costo</td>
          <td>Mes</td>
          <td>Comprobante</td>
          <td>Asignacion</td>
          <td>Tipo de pago</td>
          <td>Accion</td>
        </tr>
    </thead>
    <tbody>
        @foreach($detallecomprobantes as $detallecomprobante)
        <tr>
            <td>{{$detallecomprobante->id}}</td>
            <td>{{$detallecomprobante->cantidad}}</td>
            <td>{{$detallecomprobante->costo}}</td>
            <td>{{$detallecomprobante->mes}}</td>
            
            @foreach($comprobantes as $comprobante)
              @if($comprobante->id == $detallecomprobante->comprobante_id)
                <td>No. Serie:{{ $comprobante['serie']}} Total:{{ $comprobante['total']}}</td>
              @endif
            @endforeach

            @foreach($asignaciones as $asignacion)
              @if($asignacion->id == $detallecomprobante->asignacion_id)
                @foreach($estudiantes as $estudiante)
                  @if($estudiante->id == $asignacion->estudiante_id)
                    <td>Fecha:{{ $asignacion['fecha_asignacion'] }} Estudiante:{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</td>
                  @endif
                @endforeach
              @endif
            @endforeach

            @foreach($tipopagos as $tipopago)
              @if($tipopago->id == $detallecomprobante->tipo_pago_id)
                <td>{{ $tipopago['tipo'] }}</td>
              @endif
            @endforeach
            
            <td>
              <a href="{{ route('detalle_comprobante.edit',$detallecomprobante->id)}}" class="btn btn-primary btn-sm" title="Editar">Editar</a>
              <a href="{{ route('detalle_comprobante.show',$detallecomprobante->id)}}" class="btn btn-primary btn-sm" title="Mostrar">Mostrar</a>
                <form action="{{ route('detalle_comprobante.destroy', $detallecomprobante->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" title="Eliminar" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
</div>

@endsection
