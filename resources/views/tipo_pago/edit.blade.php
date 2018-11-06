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
    <form method="post" action="{{ route('tipo_pago.update', $tipopago->id) }}">
        @method('PATCH')
        @csrf
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label>Tipo: </label>
            <input type="text" class="form-control" name="tipo" value={{ $tipopago->tipo }}/>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label>Costo: (Q)</label>
            <input type="text" class="form-control" name="costo" value={{ $tipopago->costo }}/>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label>Detalle: </label>
            <input type="text" class="form-control" name="detalle" value={{ $tipopago->detalle }}/>
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
