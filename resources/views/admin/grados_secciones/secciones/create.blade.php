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
		          <a class="nav-link" href="{{ route('grados.index') }}">Lista de Grados</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('grados.create') }}">Nuevo ciclo</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('secciones.index') }}">Lista de Secciones</a>
		        </li>
		       	<li class="nav-item active">
		          <a class="nav-link" href="{{ route('secciones.create') }}">Nueva Seccion</a>
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
				<form method="post" action="{{ route('secciones.store') }}">
					@csrf
					<h3>Ingrese los Datos</h3>		

						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="seccion">Sección</label>
								<input type="text" class="form-control" name="seccion" input id="seccion"></input>
								@if ($errors->has('seccion'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('seccion') }}</strong>
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
