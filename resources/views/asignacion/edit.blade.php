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
    <form method="post" action="{{ route('asignacion.update', $asignacion->id) }}">
        @method('PATCH')
        @csrf
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
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="estudiante_id">Estudiante ID: </label>
            <input type="text" class="form-control" name="estudiante_id" value={{ $asignacion->estudiante_id }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="ciclo_id">Ciclo ID: </label>
            <input type="text" class="form-control" name="ciclo_id" value={{ $asignacion->ciclo_id }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="grado_id">Grado ID: </label>
            <input type="text" class="form-control" name="grado_id" value={{ $asignacion->grado_id }}>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label for="seccion_id">Seccion ID: </label>
            <input type="text" class="form-control" name="seccion_id" value={{ $asignacion->seccion_id }}>
        </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection
