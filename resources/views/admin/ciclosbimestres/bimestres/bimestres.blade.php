@extends('layouts.app')
@section('title', 'Bimestres')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('ciclos.index') }}">Lista de Ciclos</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('ciclos.create') }}">Nuevo Ciclo</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('bimestres.index') }}">Listado de Bimestres</a>
		        </li>
		       	<li class="nav-item">
		          <a class="nav-link" href="{{ route('bimestres.create') }}">Nuevo Bimestre</a>
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
					<th>Ciclo_ID</th>					
					<th>Bimestre</th>
					<th>Actualizado</th>
					<th>Eliminado</th>
					<th>Opciones</th>
				</thead>		
				@foreach($bimestres as $bimestre)		
				<tr>
					<td>{{$bimestre->id}}</td>
					<td>{{$bimestre->ciclo_id}}</td>
					<td>{{$bimestre->bimestre}}</td>
					<td>{{$bimestre->updated_at}}</td>
					<td>{{$bimestre->deleted_at}}</td>
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