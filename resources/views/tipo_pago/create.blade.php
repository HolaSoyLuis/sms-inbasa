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
              <a class="nav-link" href="{{ route('tipo_pago.index') }}">Lista de tipos de pago</a>
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
      <form method="post" action="{{ route('tipo_pago.store') }}">
        <h3>Ingrese los datos</h3>
        <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              {{ csrf_field() }}
              <label>Tipo: </label>
              <input type="text" class="form-control" name="tipo"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Costo: </label>
              <input type="text" class="form-control" name="costo"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Detalle: </label>
              <input type="text" class="form-control" name="detalle"/>
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
