@extends('layouts.app')
@section('title', 'Encargado')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('encargado.index') }}">Lista de encargados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('encargado.create') }}">Nuevo encargado</a>
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
      <form method="post" action="{{ route('encargado.store') }}">
        <h3>Ingrese los Datos</h3>
          <div class="form-group label-floating">
              {{ csrf_field() }}
              <label for="p_nombre">Primer nombre: </label>
              <input type="text" class="form-control" name="p_nombre"/>
          </div>
          <div class="form-group label-floating">
              <label for="s_nombre">Segundo nombre: </label>
              <input type="text" class="form-control" name="s_nombre"/>
          </div>
          <div class="form-group label-floating">
              <label for="p_apellido">Primer apellido: </label>
              <input type="text" class="form-control" name="p_apellido"/>
          </div>
          <div class="form-group label-floating">
              <label for="s_apellido">Segundo apellido: </label>
              <input type="text" class="form-control" name="s_apellido"/>
          </div>
          <div class="form-group label-floating">
              <label for="genero">Genero: </label>
              <input type="text" class="form-control" name="genero"/>
          </div>
          <div class="form-group label-floating">
              <label for="fecha_nac">Fecha de nacimiento: </label>
              <input type="text" class="form-control" name="fecha_nac"/>
          </div>
          <div class="form-group label-floating">
              <label for="direccion">Direccion: </label>
              <input type="text" class="form-control" name="direccion"/>
          </div>
          <div class="form-group label-floating">
              <label for="telefono">Telefono: </label>
              <input type="text" class="form-control" name="telefono"/>
          </div>
          <div class="form-group">
              <label for="cui">CUI: </label>
              <input type="text" class="form-control" name="cui"/>
          </div>
          <div class="form-grouplabel-floating">
              <label for="foto">Foto: </label>
              <input type="text" class="form-control" name="foto"/>
          </div>
          <div class="form-group label-floating">
              <label for="usuario_id">Ingrese ID del usuario</label>
              <select class="form-control" name="usuario_id" id="usuario_id">
                  @foreach ($users as $user)
                    <option value="{{ $user['id'] }}">{{ $user['id'] }}</option>
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
