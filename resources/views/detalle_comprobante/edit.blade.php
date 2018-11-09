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
              <a class="nav-link" href="{{ route('detalle_comprobante.index') }}">Lista de detalles de comprobante</a>
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
<div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="container">
      <div class="row justify-content-center">
            <div class="card-body text-center">
    <form method="post" action="{{ route('detalle_comprobante.update', $detallecomprobante->id) }}">
        @method('PATCH')
        @csrf
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="cantidad">Cantidad: </label>
            <input type="text" class="form-control" name="cantidad" value={{ $detallecomprobante->cantidad }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="costo">Costo: (Q)</label>
            <input type="text" class="form-control" name="costo" value={{ $detallecomprobante->costo }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="mes">Mes: </label>
            <input type="text" class="form-control" name="mes" value={{ $detallecomprobante->mes }}>
        </div>
        </div>
        </div>

        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="comprobante_id">
                  @foreach ($comprobantes as $comprobante)
                    @if($detallecomprobante->comprobante_id == $comprobante->id)
                      <option value="{{ $comprobante['id'] }}" selected="true">No. Serie:{{ $comprobante['serie']}} Total:{{ $comprobante['total']}}</option>
                    @elseif ($comprobante->comprobante_id != $comprobante->id)
                        <option value="{{ $comprobante['id'] }}">No. Serie:{{ $comprobante['serie']}} Total:{{ $comprobante['total']}}</option>
                    @endif
                  @endforeach
              </select>
        </div>
        </div>
        </div>
        <br>
        <br>

        <div class="col">
        <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="asignacion_id">
                  @foreach ($asignaciones as $asignacion)
                    @foreach($estudiantes as $estudiante)
                      @if($detallecomprobante->asignacion_id == $asignacion->id)
                        <option value="{{ $asignacion['id'] }}" selected="true">Fecha:{{ $asignacion['fecha_asignacion'] }} Estudiante:{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</option>
                      @elseif ($comprobante->asignacion_id != $asignacion->id)
                        <option value="{{ $asignacion['id'] }}">Fecha:{{ $asignacion['fecha_asignacion'] }} Estudiante:{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</option>
                      @endif
                    @endforeach
                  @endforeach
              </select>
        </div>
        </div>
        </div>
        <br>
        <br>

        <div class="col">
        <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="tipo_pago_id">
              @foreach ($tipopagos as $tipopago)
                @if($detallecomprobante->tipo_pago_id == $tipopago->id)
<<<<<<< HEAD
                  <option value="{{ $tipopago['id'] }}" selected="true">{{ $tipopago['tipo'] }}</option>
                @elseif ($detallecomprobante->tipo_pago_id != $tipopago->id)
                  <option value="{{ $tipopago['id'] }}">{{ $tipopago['tipo'] }}</option>
                @endif
=======
                      <option value="{{ $tipopago['id'] }}" selected="true">{{ $tipopago['tipo'] }}</option>
                    @elseif ($comprobante->tipo_pago_id != $tipopago->id)
                      <option value="{{ $tipopago['id'] }}">{{ $tipopago['tipo'] }}</option>
                    @endif
>>>>>>> acdb3553b47b203276a2e6175a20e27a1a3746b0
              @endforeach
            </select>
        </div>
        </div>
        </div>

        <br>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection
