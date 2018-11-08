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
						<li class="nav-item">
		          <a class="nav-link" href="{{ route('estudiantes.pdf') }}">Exportar PDF</a>
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
							<td class="td-actions text-left"></td>	
							<td class="td-actions text-left">Primer Nombre</td>					
							<td class="td-actions text-left">Primer Apellido</td>
							<td class="td-actions text-left">Codigo</td>
							<td class="td-actions text-left">Estado</td>
							<td class="td-actions text-left">Usuario</td>
							<td class="td-actions text-left">Actualizado</td>
							<td class="td-actions text-center">Opciones</td>
						</thead>		
						@foreach($estudiantes as $e)		
						<tr>
							<td class="td-actions text-left">{{$e->id}}</td>
							<td class="td-actions text-left">{{$e->p_nombre}}</td>
							<td class="td-actions text-left">{{$e->p_apellido}}</td>
							<td class="td-actions text-left">{{$e->codigo}}</td>
							@if ($e->estado == 1)            
								<td class="td-actions text-left">ACTIVO</td>
								@elseif ($e->estado == 2)
								<td class="td-actions text-left">INACTIVO</td>
								@elseif ($e->estado == 3)
								<td class="td-actions text-left">RETIRADO</td>
								@elseif ($e->estado == 4)
								<td class="td-actions text-left">SUSPENDIDO</td>
							@endif
							@foreach($users as $use)
								@if($e->usuario_id == $use->id)          
									<td class="td-actions text-left">{{$use->username}}</td>
								@endif
							@endforeach	
							<td class="td-actions text-left">{{$e->updated_at}}</td>	
							<td class="td-actions text-center">
								<form method="post" action="{{ route('estudiantes.destroy', $e->id) }}">						
									<a href="{{ route('estudiantes.show', $e->id) }}" class="btn btn-info btn-sm" title="Ver">
										<i class="material-icons">visibility</i>Ver
									</a>
									<a href="{{ route('estudiantes.edit', $e->id) }}" class="btn btn-primary btn-sm" title="Editar">
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
					</table>
				</div>	
			</div>	
		</div>
	</div>
</div>
@endsection