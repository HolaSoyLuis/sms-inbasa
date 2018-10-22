@extends('layouts.app')
@section('title', 'Crear Bimestre')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<!-- <h3>Listado de Usuarios <a href="usuarios/create"><button class="btn btn-success">Nuevo</button></h3></a>			 -->
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('ciclos.index') }}">Lista de Ciclos</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('ciclos.create') }}">Nuevo ciclo</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('bimestres.index') }}">Listado de Bimestres</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('bimestres.create') }}">Nuevo Bimestre</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">	
		<div class="col-md-4">
			<div class="card">
				<div class="card-body text-center">								
				<form method="post" action="{{ route('bimestres.store') }}">
					@csrf
					<h3>Ingrese los Datos</h3>		

						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="ciclo_id">Ciclo ID</label>
								<input type="number" class="form-control" name="ciclo_id" input id="ciclo_id"></input>
								@if ($errors->has('ciclo_id'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('ciclo_id') }}</strong>
										</span>
								@endif					
							</div>
						</div>

						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="bimestre">Bimestre</label>
								<input type="char" class="form-control" name="bimestre" input id="bimestre"></input>
								@if ($errors->has('bimestre'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('bimestre') }}</strong>
										</span>
								@endif					
							</div>
						</div>

																	
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>				
						</div>
					</form>											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
