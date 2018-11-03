@extends('layouts.app')
@section('title', 'Registrar Notas')
@section('content')



<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('docentes.notas.index') }}">Listar Notas</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('docentes.notas.create') }}">Registrar Notas</a>
		        </li>
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
								<label for="nota">Nota</label>
								<input type="text" class="form-control{{ $errors->has('nota') ? ' is-invalid' : '' }}" name="nota" input id="nota"></input>
								@if ($errors->has('nota'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('nota') }}</strong>
										</span>
								@endif					
							</div>
						</div>

				</div> {{--Fin Columna--}}



				





				<div class="col"> {{-- Tercera Columna --}}


							
					<div class="form-group label-floating">								
								<label for="tipo_evaluacion_id">Evaluacion</label>																
								<select class="form-control{{ $errors->has('tipo_evaluacion_id') ? ' is-invalid' : '' }}" name="tipo_evaluacion_id" id="tipo_evaluacion_id">
									@foreach ($tipoEvaluaciones as $u)
										<option value="{{ $u['id'] }}">{{ $u['tipo']}}</option>										
									@endforeach																										
								</select>																							
								@if ($errors->has('tipo_evaluacion_id'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('tipo_evaluacion_id') }}</strong>
										</span>
								@endif					
							</div>


				</div> {{--Fin Columna--}}




		</div>{{-- Fin Contenedor --}}


		<div class="form-row">  {{--Contenedor Segunda Fila--}}	


				<div class="col"> {{-- Primera Columna --}}

					<div class="form-group label-floating">								
								<label for="estudiante_id">Estudiante</label>																
								<select class="form-control{{ $errors->has('estudiante_id') ? ' is-invalid' : '' }}" name="estudiante_id" id="estudiante_id">
									@foreach ($estudiantes as $u)
										<option value="{{ $u['id'] }}">{{ $u['p_nombre']}}</option>										
									@endforeach																										
								</select>																							
								@if ($errors->has('estudiante_id'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('estudiante_id') }}</strong>
										</span>
								@endif					
							</div>

				</div> {{--Fin Columna--}}



				<div class="col"> {{-- Segunda Columna --}}

							<div class="form-group label-floating">								
										
										<label for="curso_id">Cursos</label>
										<select class="form-control{{ $errors->has('curso_id') ? ' is-invalid' : '' }}" name="curso_id" id="curso_id" >
											
												@foreach ($cursos as $u)
												
													<option value="{{ $u['id'] }}">{{ $u['nombre'] }}</option>			
				
												@endforeach																										
											</select>																							
											@if ($errors->has('curso_id'))
													<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('curso_id') }}</strong>
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
