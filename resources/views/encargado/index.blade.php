@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Genero</td>
          <td>Fecha de nacimiento</td>
          <td>Direccion</td>
          <td>Telefono</td>
          <td>CUI</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($encargados as $encargado)
        <tr>
            <td>{{$encargado->id}}</td>
            <td>{{$encargado->p_nombre}} {{$encargado->s_nombre}} {{$encargado->p_apellido}} {{$encargado->s_apellido}}</td>
            <td>{{$encargado->genero}}</td>
            <td>{{$encargado->fecha_nac}}</td>
            <td>{{$encargado->direccion}}</td>
            <td>{{$encargado->telefono}}</td>
            <td>{{$encargado->cui}}</td>
            <td><a href="{{ route('encargados.edit',$encargado->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('encargados.destroy', $encargado->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection