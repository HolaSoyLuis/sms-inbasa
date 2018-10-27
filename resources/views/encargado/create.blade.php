@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Agregar encargado
  </div>
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
      <form method="post" action="{{ route('encargado.store') }}">
          <div class="form-group">
              {{ csrf_field() }}
              <label for="name">Primer nombre: </label>
              <input type="text" class="form-control" name="p_nombre"/>
          </div>
          <div class="form-group">
              <label for="price">Segundo nombre: </label>
              <input type="text" class="form-control" name="s_nombre"/>
          </div>
          <div class="form-group">
              <label for="price">Primer apellido: </label>
              <input type="text" class="form-control" name="p_apellido"/>
          </div>
          <div class="form-group">
              <label for="price">Segundo apellido: </label>
              <input type="text" class="form-control" name="s_apellido"/>
          </div>
          <div class="form-group">
              <label for="price">Genero: </label>
              <input type="text" class="form-control" name="genero"/>
          </div>
          <div class="form-group">
              <label for="price">Fecha de nacimiento: </label>
              <input type="text" class="form-control" name="fecha_nac"/>
          </div>
          <div class="form-group">
              <label for="price">Direccion: </label>
              <input type="text" class="form-control" name="direccion"/>
          </div>
          <div class="form-group">
              <label for="price">Telefono: </label>
              <input type="text" class="form-control" name="telefono"/>
          </div>
          <div class="form-group">
              <label for="price">CUI: </label>
              <input type="text" class="form-control" name="cui"/>
          </div>
          <div class="form-group">
              <label for="price">Foto: </label>
              <input type="text" class="form-control" name="foto"/>
          </div>
          <div class="form-group">
              <label for="quantity">Usuario id: </label>
              <input type="text" class="form-control" name="usuario_id"/>
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
  </div>
</div>

@endsection