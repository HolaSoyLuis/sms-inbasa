@extends('layouts.app')
@section('title', 'Cursos')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('cursos.index') }}">Lista de Cursos</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('cursos.create') }}">Nuevo curso</a>
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
					<th>No</th>	
					<th>Codigo</th>
					<th>Grado</th>					
					<th>Docentes</th>
         			<th>Nombre</th>
          			<th>Descripcion</th>
        		    <th>Estado</th>
					<th>Creado</th>
					<th>Actualizado</th>					
					<th>Eliminado</th>
					<th>Opciones</th>
				</thead>		
				@foreach($cursos as $curso)		
				<tr>
					<td>{{$curso->id}}</td>
					<td>{{$curso->codigo}}</td>
					<td>{{$curso->grado_id}}</td>
					<td>{{$curso->docente_id}}</td>
    			    <td>{{$curso->nombre}}</td>
        			<td>{{$curso->descripcion}}</td>
          			<td>{{$curso->estado}}</td>
          			<td>{{$curso->created_at}}</td>  
          			<td>{{$curso->updated_at}}</td>        
					<td>{{$curso->deleted_at}}</td>			
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