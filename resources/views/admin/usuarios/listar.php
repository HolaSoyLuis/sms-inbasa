@extends('admin.usuarios.index')
@section('title', 'Crear Usuarios')
@section('content')
<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed table-hover">
		<thead>
			<th>No</th>	
			<th>Nombre</th>					
			<th>Rol</th>
			<th>Creado</th>
			<th>Actualizado</th>
			<th>Opciones</th>
		</thead>		
		@foreach($users as $user)		
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->username}}</td>
			<td>rol</td>
			<td>{{$user->created_at}}</td>
			<td>{{$user->updated_at}}</td>
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
@endsection
