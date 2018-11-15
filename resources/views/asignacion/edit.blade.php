@extends('layouts.app')
@section('title', 'Asignacion')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.index') }}">Lista de asignaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.create') }}">Nueva asignacion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

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
    <form method="post" action="{{ route('asignacion.update', $asignacion->id) }}">
        @method('PATCH')
        @csrf

      <div class="form-row">
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="fecha_asignacion">Fecha de asignacion: </label>
            <input type="text" class="form-control" name="fecha_asignacion" value={{ $asignacion->fecha_asignacion }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="nuevo_reingreso">Nuevo/Reingreso: </label>
            <input type="text" class="form-control" name="nuevo_reingreso" value={{ $asignacion->nuevo_reingreso }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="certificado">Certificado: </label>
            <input type="text" class="form-control" name="certificado" value={{ $asignacion->certificado }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="clave_estudiante">Clave: </label>
            <input type="text" class="form-control" name="clave_estudiante" value={{ $asignacion->clave_estudiante }}>
        </div>
        </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">

            <select class="form-control" name="estudiante_id">
                    <option selected="true" disabled="disabled">--Seleccione el estudiante--</option>
                  @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante['id'] }}">{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</option>
                  @endforeach
              </select>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="ciclo_id" id="ciclo_id">
                <option selected="true" disabled="disabled">--Seleccione el ciclo--</option>
                  @foreach ($ciclos as $ciclo)
                    <option value="{{ $ciclo['id'] }}">{{ $ciclo['fecha_inicio'] }} - {{ $ciclo['fecha_fin'] }}</option>
                  @endforeach
              </select>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="grado_id" id="grado_id">
              <option selected="true" disabled="disabled">--Seleccione el grado--</option>
                  @foreach ($grados as $grado)
                    <option value="{{ $grado['id'] }}">{{ $grado['grado'] }}</option>
                  @endforeach
              </select>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="seccion_id" id="seccion_id">
                <option selected="true" disabled="disabled">--Seleccione la seccion--</option>
                  @foreach ($secciones as $seccion)
                    <option value="{{ $seccion['id'] }}">{{ $seccion['seccion'] }} - {{ $seccion['grado_id'] }}</option>
                  @endforeach
              </select>
        </div>
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
