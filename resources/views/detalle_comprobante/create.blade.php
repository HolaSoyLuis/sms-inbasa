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
      </div><br/>
    @endif
    <div class="container">
      <div class="row justify-content-center">
            <div class="card-body text-center">
      <form method="post" action="{{ route('detalle_comprobante.store') }}">
        <h3>Ingrese los datos</h3>
        <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              {{ csrf_field() }}
              <label for="cantidad">Cantidad: </label>
              <input type="text" class="form-control" name="cantidad"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="costo">Costo: </label>
              <input type="text" class="form-control" name="costo"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="mes">Mes: </label>
              <input type="text" class="form-control" name="mes"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="comprobante_id">Comprobante</label>
              <select class="form-control" name="comprobante_id" id="comprobante_id">
                  @foreach ($comprobantes as $comprobante)
                  <option value="{{ $comprobante['id'] }}">No. Serie:{{ $comprobante['serie']}} Total:{{ $comprobante['total']}}</option>
                  @endforeach
              </select>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="asignacion_id">Asignacion</label>
              <select class="form-control" name="asignacion_id" id="asignacion_id">
                  @foreach ($asignaciones as $asignacion)
                    @foreach($estudiantes as $estudiante)
                      <option value="{{ $asignacion['id'] }}">Fecha:{{ $asignacion['fecha_asignacion'] }} Estudiante:{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</option>
                    @endforeach
                  @endforeach
              </select>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="tipo_pago_id">Tipo de pago</label>
              <select class="form-control" name="tipo_pago_id" id="tipo_pago_id">
                  @foreach ($tipopagos as $tipopago)
                    <option value="{{ $tipopago['id'] }}">{{ $tipopago['tipo'] }}</option>
                  @endforeach
              </select>
          </div>
          </div>
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection
