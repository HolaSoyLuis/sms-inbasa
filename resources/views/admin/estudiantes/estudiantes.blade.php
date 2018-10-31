@extends('layouts.app')
@section('title', 'Estudiantes')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('estudiantes.index') }}">Lista de Estudiantes</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('estudiantes.create') }}">Nuevo Estudiante</a>
		        </li>
		      </ul>
				<form class="form-inline ml-auto">
					<div class="form-group has-white">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-white btn-just-icon btn-round">
							<i class="material-icons">search</i>
					</button>
				</form>
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
					<th>No</th>	
					<th>Primer Nombre</th>					
					<th>Primer Apellido</th>
					<th>Codigo</th>
					<th>Estado</th>
					<th>Creado</th>
					<th>Actualizado</th>
					<th>Eliminado</th>
				</thead>		
				@foreach($estudiantes as $e)		
				<tr>
					<td>{{$e->id}}</td>
					<td>{{$e->p_nombre}}</td>
					<td>{{$e->p_apellido}}</td>
					<td>{{$e->codigo}}</td>
					<td>{{$e->codigo}}</td>
					<td>{{$e->estado}}</td>
					<td>{{$e->created_at}}</td>
					<td>{{$e->updated_at}}</td>
					<td>{{$e->deleted_at}}</td>	
					<td>
						<a href="#">
							<button class="btn btn-info btn-sm" title="Ver">
								<i class="material-icons">visibility</i>
								Ver
							</button>
						</a>
						<a href="#">
							<button class="btn btn-primary btn-sm" title="Editar">
								<i class="material-icons">edit</i>
								Editar
							</button>
						</a>
						<a href="" data-target="#" data-toggle="modal">
							<button class="btn btn-danger btn-sm" title="Eliminar">
								<i class="material-icons">delete</i>
								Eliminar
							</button>
						</a>
					</td>
				</tr>	
				@endforeach						
			</table>
		</div>		
	</div>
</div>
@endsection