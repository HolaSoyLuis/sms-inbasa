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

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Genero</td>
          <td>Fecha de nacimiento</td>
          <td>Direccion</td>
          <td>Telefono</td>
          <td>CUI</td>
          <td>Actions</td>
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
            <td>
              <!--
                <a href="{{ route('encargado.edit',$encargado->id)}}" class="btn btn-primary">Editar</a>
                <form action="{{ route('encargado.destroy', $encargado->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
              -->
                <a href="{{ route('encargado.edit',$encargado->id)}}">
    							<button class="btn btn-primary btn-sm" title="Editar">
    								<i class="material-icons">edit</i>
    								Editar
    							</button>
    						</a>
                <form action="{{ route('encargado.destroy', $encargado->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" title="Eliminar">
    								<i class="material-icons">delete</i>
    								Eliminar
    							</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
</div>

@endsection
