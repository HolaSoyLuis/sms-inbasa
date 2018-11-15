@extends('layouts.app')
@section('title', 'Listado de Usuarios')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('usuarios.index') }}">Lista de Usuarios</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('usuarios.create') }}">Nuevo Usuario</a>
		        </li>
						<li class="nav-item">
		          <a class="nav-link" href="{{ route('usuarios.pdf') }}">Exportar PDF</a>
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
							<td>Nombre</td>											
							<td>Creado</td>
							<td>Actualizado</td>
							<td>Opciones</td>
						</thead>
						@foreach($users as $user)		
						<tr>
							<td class="td-actions text-left">{{$user->id}}</td>
							<td class="td-actions text-left">{{$user->username}}</td>					
							<td class="td-actions text-left">{{$user->created_at}}</td>
							<td class="td-actions text-left">{{$user->updated_at}}</td>
							<td class="td-actions text-center">
								<form method="post" action="{{ route('usuarios.destroy', $user->id) }}">						
									<a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary btn-sm" title="Editar">
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
