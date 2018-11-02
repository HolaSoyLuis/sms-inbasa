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
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <center>
        <h3>Detalle de la asignacion</h3>
      </center>
          <label>Fecha de asignacion:</label>
            <p>{{$asignacion->fecha_asignacion}}</p>
            <label>Nuevo/reingreso</label>
            <p>{{$asignacion->fecha_asignacion}}</p>
            @if ($asignacion->nuevo_reingreso == 1)
              <p>Nuevo ingreso</p>
            @elseif ($asignacion->nuevo_reingreso == 2)
              <p>Reingreso</p>
            @endif
            <label>Certificado:</label>
            <p>{{$asignacion->certificado}}</p>
            <label>Clave:</label>
            <p>{{$asignacion->clave_estudiante}}</p>

            <label>Estudiante:</label>
            @foreach ($estudiantes as $estudiante)
              @if ($estudiante->id == $asignacion->estudiante_id)
                <p>{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</p>
              @endif
            @endforeach

            <label>Ciclo</label>
            @foreach($ciclos as $ciclo)
              @if($ciclo->id == $asignacion->ciclo_id)
                <p>{{ $ciclo['fecha_inicio'] }} - {{ $ciclo['fecha_fin'] }}</p>
              @endif
            @endforeach

            <label>Grado</label>
            @foreach($grados as $grado)
              @if($grado->id == $asignacion->grado_id)
                <p>{{ $grado['grado'] }}</p>
              @endif
            @endforeach

            <label>Seccion</label>
            @foreach($secciones as $seccion)
              @if($seccion->id == $asignacion->seccion_id)
                <p>{{ $seccion['seccion'] }} - {{ $seccion['grado_id'] }}</p>
              @endif
            @endforeach
</div>
</div>
</div>

@endsection
