@extends('layouts.app')
@section('title', 'Crear Bloque')
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
		          <a class="nav-link" href="{{ route('ciclos.create') }}">Nuevo ciclo</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('bloques.index') }}">Listado de Bloques</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('bloques.create') }}">Nuevo Bloque</a>
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
				<form method="post" action="{{ route('bloques.store') }}">
					@csrf
					<h3>Ingrese los Datos</h3>		

						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="ciclo_id">Ingrese ID del ciclo</label>																
								<select class="form-control" name="ciclo_id" id="ciclo_id">
									@foreach ($ciclos as $ciclo)
										<option value="{{ $ciclo['id'] }}">{{ $ciclo['id'] }}</option>										
									@endforeach																										
								</select>																							
								@if ($errors->has('ciclo_id'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('ciclo_id') }}</strong>
										</span>
								@endif					
							</div>
						</div>

						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="bloque">Bloque</label>
								<input type="char" class="form-control" name="bloque" input id="bloque"></input>
								@if ($errors->has('bloque'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('bloque') }}</strong>
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

