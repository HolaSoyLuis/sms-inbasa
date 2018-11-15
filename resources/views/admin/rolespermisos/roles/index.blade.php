@extends('layouts.app')
@section('title', 'Listado de Roles y Permisos')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">

            <li class="nav-item active">
		          <a class="nav-link" href="{{ route('roles.index') }}">Lista de Roles</a>
		        </li>
			    	<li class="nav-item">
		          <a class="nav-link" href="{{ route('permisos.index') }}">Lista de Permisos</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="card-body text-center">	
				<div class="table-responsive">
					<table id="datatable_table" class="table table-condensed table-hover">
						<thead>
							<td></td>																		
							<td>Slug</td>
              <td>Descripcion</td>
							<td>Opciones</td>
						</thead>
						@foreach($roles as $rol)		
						<tr>
							<td class="td-actions text-left">{{$rol->id}}</td>							
              <td class="td-actions text-left">{{$rol->slug}}</td>
              <td class="td-actions text-left">{{$rol->description}}</td>					
							<td class="td-actions text-center">
								<form method="post" action="">						
									<a href="" class="btn btn-primary btn-sm" title="Editar">
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
