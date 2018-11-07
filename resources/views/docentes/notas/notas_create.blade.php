@extends('layouts.app')
@section('title', 'Registrar Notas')
@section('content')



<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('docentes.notas.index') }}">Notas</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('docentes.notas.create') }}">Registrar Notas</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('detalle_nota.index') }}">Detalle Notas</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('detalle_nota.create') }}">Registrar Detalle Notas</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>





<div class="container">
	<div class="row justify-content-center">	
		<div class="col">
			
			<div class="card">
				   
      <br/>
    		
    					<div class="card-body text-center">				
				<form method="post" action="{{ route('docentes.notas.store') }}">
					@csrf
					
				
					<h3>Ingrese los Datos</h3>	




			 {{--Formulario--}}	
 		<div class="form-row">  {{--Contenedor Primera Fila--}}	

				<div class="col">  {{--Primera Columna --}}	
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="total_bloque">Total bloque</label>
								<input type="text" class="form-control{{ $errors->has('nota') ? ' is-invalid' : '' }}" name="total_bloque" input id="total_bloque"></input>
								@if ($errors->has('total_bloque'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('total_bloque') }}</strong>
										</span>
								@endif					
							</div>
						</div>
		</div> {{--Fin Columna--}}
	

				<div class="col">  {{--Segunda Columna --}}	
						<div class="form-group">
							<div class="form-group label-floating">								
						  		<label for="detalles">Detalles</label>
								<input type="text" class="form-control{{ $errors->has('nota') ? ' is-invalid' : '' }}" name="detalles" input id="detalles"></input>
								@if ($errors->has('detalles'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('detalles') }}</strong>
										</span>
								@endif					
							</div>
						</div>
		</div> {{--Fin Columna--}}


				<div class="col"> {{-- Tercera Columna --}}					
					<div class="form-group label-floating">								
								<label for="tipo_evaluacion_id">Asignacion</label>																
								<select class="form-control{{ $errors->has('tipo_evaluacion_id') ? ' is-invalid' : '' }}" name="asignacion_id" id="asignacion_id">
									@foreach ($asignaciones as $u)
										<option value="{{ $u['id'] }}">{{ $u['clave_estudiante']}}</option>										
									@endforeach																										
								</select>																						@if ($errors->has('asignacion_id'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('asignacion_id') }}</strong>
										</span>
								@endif					
							</div>
				</div> {{--Fin Columna--}}




		</div>{{-- Fin Contenedor --}}		



						</div>
																	
						<div class="form-group text-center">
							<button class="btn btn-primary" type="submit">Guardar</button>				
						</div>
					</form>											
				</div>
			</div>


	
		</div>
	</div>

</div>



@endsection
