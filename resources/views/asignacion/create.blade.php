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
      </div><br/>
    @endif
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body text-center">
      <form method="post" action="{{ route('asignacion.store') }}">
				<h3>Ingrese los Datos</h3>
          <div class="form-group label-floating">
              {{ csrf_field() }}
              <label for="name">Fecha de asignacion: </label>
              <input type="text" class="form-control" name="fecha_asignacion"/>
          </div>
          <div class="form-group label-floating">
              <label for="price">Nuevo/Reingreso: </label>
              <input type="text" class="form-control" name="nuevo_reingreso"/>
          </div>
          <div class="form-group label-floating">
              <label for="price">Certificado: </label>
              <input type="text" class="form-control" name="certificado"/>
          </div>
          <div class="form-group label-floating">
              <label for="price">Clave del estudiante: </label>
              <input type="text" class="form-control" name="clave_estudiante"/>
          </div>
          <div class="form-group label-floating">
              <label for="usuario_id">Estudiante</label>
              <select class="form-control" name="estudiante_id" id="estudiante_id">
                  @foreach ($estudiantes as $estudiante)
                  <!--
                    <option value="{{ $estudiante['id'] }}">{{ $estudiante['id'] }}</option>
                  -->
                    <option value="{{ $estudiante['id'] }}">{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group label-floating">
              <label for="usuario_id">Ciclo</label>
              <select class="form-control" name="ciclo_id" id="ciclo_id">
                  @foreach ($ciclos as $ciclo)
                    <option value="{{ $ciclo['id'] }}">{{ $ciclo['fecha_inicio'] }} - {{ $ciclo['fecha_fin'] }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group label-floating">
              <label for="usuario_id">Grado</label>
              <select class="form-control" name="grado_id" id="grado_id">
                  @foreach ($grados as $grado)
                    <option value="{{ $grado['id'] }}">{{ $grado['grado'] }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group label-floating">
              <label for="usuario_id">Seccion</label>
              <select class="form-control" name="seccion_id" id="seccion_id">
                  @foreach ($secciones as $seccion)
                    <option value="{{ $seccion['id'] }}">{{ $seccion['seccion'] }} - {{ $seccion['grado_id'] }}</option>
                  @endforeach
              </select>
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
