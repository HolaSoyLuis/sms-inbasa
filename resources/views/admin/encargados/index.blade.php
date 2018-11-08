@extends('layouts.app')
@section('title', 'Encargado')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('encargado.index') }}">Lista de encargados</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('encargado.create') }}">Nuevo encargado</a>
		        </li>
            <li class="nav-item">
		          <a class="nav-link" href="{{ route('encargado.pdf') }}">Exportar PDF</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>
@include('message._message')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
			<div class="card-body">	
        <div class="table-responsive">
          <table id="datatable_table" class="table table-condensed table-hover">
            <thead>
              <tr>
                <td></td>
                <td>Nombre</td>
                <td>Genero</td>
                <td>Fecha de nacimiento</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>CUI</td>
                <td>Opciones</td> 
              </tr>
            </thead>
            <tbody>
              @foreach($encargados as $en)
              <tr>
                <td>{{$en->id}}</td>
                <td>{{$en->p_nombre}}</td>
                <td>{{$en->genero}}</td>
                <td>{{$en->fecha_nac}}</td>
                <td>{{$en->direccion}}</td>
                <td>{{$en->telefono}}</td>
                <td>{{$en->cui}}</td>
                <td>
                  <form method="post" action="{{ route('encargado.destroy', $en->id) }}">						
                    <a href="{{ route('encargado.show', $en->id) }}" class="btn btn-info btn-sm" title="Ver">
                      <i class="material-icons">visibility</i>Ver
                    </a>
                    <a href="{{ route('encargado.edit', $en->id) }}" class="btn btn-primary btn-sm" title="Editar">
                      <i class="material-icons">edit</i>Editar
                    </a>													
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar">
                      <i class="material-icons">delete</i>Eliminar
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
  </div>
</div>
@endsection
