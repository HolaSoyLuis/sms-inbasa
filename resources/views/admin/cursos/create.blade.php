@extends('layouts.app')
@section('title', 'Crear Seccion')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('cursos.index') }}">Lista de Grados</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('cursos.create') }}">Nuevo ciclo</a>
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
				<form method="post" action="{{ route('cursos.store') }}">
					@csrf
					<h3>Ingrese los Datos</h3>		

						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="codigo">Codigo</label>
								<input type="text" class="form-control" name="codigo" input id="codigo"></input>
								@if ($errors->has('codigo'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('codigo') }}</strong>
										</span>
								@endif					
							</div>
						</div>
						
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" name="nombre" input id="nombre"></input>
								@if ($errors->has('nombre'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('nombre') }}</strong>
										</span>
								@endif					
							</div>
						</div>
						
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="descripcion">Descripción</label>
								<input type="text" class="form-control" name="descripcion" input id="descripcion"></input>
								@if ($errors->has('descripcion'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('descripcion') }}</strong>
										</span>
								@endif					
							</div>
						</div>
						
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="estado">Estado</label>
								<input type="text" class="form-control" name="estado" input id="estado"></input>
								@if ($errors->has('estado'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('estado') }}</strong>
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
