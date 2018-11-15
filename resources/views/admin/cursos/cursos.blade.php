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
		          <a class="nav-link" href="{{ route('cursos.create') }}">Nuevo Curso</a>
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
							<td></td>	
							<td>Codigo</td>
							<td>Nombre</td>											
							<td>Estado</td>
							<td>Grado</td>
							<td>Docente</td>							
							<td>Actualizado</td>												
							<td>Opciones</td>
						</thead>		
						@foreach($cursos as $c)		
						<tr>
							<td class="td-actions text-left">{{$c->id}}</td>
							<td class="td-actions text-left">{{$c->codigo}}</td>
							<td class="td-actions text-left">{{$c->nombre}}</td>
							@if ($c->estado == 1)            
								<td class="td-actions text-left">ACTIVO</td>
								@elseif ($c->estado == 2)
								<td class="td-actions text-left">INACTIVO</td>
								@elseif ($c->estado == 3)
								<td class="td-actions text-left">RETIRADO</td>
								@elseif ($c->estado == 4)
								<td class="td-actions text-left">SUSPENDIDO</td>
							@endif
							@foreach($grados as $gr)
								@if($c->grado_id == $gr->id)          
									<td class="td-actions text-left">{{$gr->grado}}</td>
								@endif
							@endforeach
							@foreach($empleados as $em)
								@if($c->docente_id == $em->id)          
									<td class="td-actions text-left">{{$em->p_nombre}} {{$em->p_apellido}}</td>
								@endif
							@endforeach													
							<td class="td-actions text-left">{{$c->updated_at}}</td>        									
							<td class="td-actions text-center">
								<form method="post" action="{{ route('cursos.destroy', $c->id) }}">						
									<a href="{{ route('cursos.show', $c->id) }}" class="btn btn-info btn-sm" title="Ver">
										<i class="material-icons">visibility</i>Ver
									</a>
									<a href="{{ route('cursos.edit', $c->id) }}" class="btn btn-primary btn-sm" title="Editar">
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