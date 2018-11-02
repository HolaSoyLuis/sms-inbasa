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
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <center>
        <h3>Detalles del encargado</h3>
      </center>
          <label>Nombre completo:</label>
            <p>{{ $encargado['p_nombre'] }} {{ $encargado['s_nombre'] }} {{ $encargado['p_apellido'] }} {{ $encargado['s_apellido'] }}</p>
            <label>Genero:</label>
            <p>{{$encargado->genero}}</p>
            <label>Fecha de nacimiento:</label>
            <p>{{$encargado->fecha_nac}}</p>
            <label>Direccion:</label>
            <p>{{$encargado->direccion}}</p>
            <label>Telefono:</label>
            <p>{{$encargado->telefono}}</p>
            <label>Cui:</label>
            <p>{{$encargado->cui}}</p>
            <label>Foto:</label>
            <p>{{$encargado->foto}}</p>
            @foreach($users as $user)
              @if($user->id == $encargado->usuario_id)
              <label>Usuario:</label>
                <p>{{ $user['username']}}</p>
              @endif
            @endforeach
</div>
</div>
</div>

@endsection
