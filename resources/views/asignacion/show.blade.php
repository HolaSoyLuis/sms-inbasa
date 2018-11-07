@extends('layouts.app')
@section('title', 'Asignacion')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.index') }}">Lista de asignaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.create') }}">Nueva asignacion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-md-8">
		<div class="card">    
			<div class="card-body text-left">        
        <center>      
        <h3>Detalle de la asignacion</h3>
        </center>
        <div class="form-row"> {{--Primera Fila --}} 

          <div class="col">{{--Primera Columna --}}    
            <label>Fecha de asignacion:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$asignacion->fecha_asignacion}}</p>                 
          </div> {{--Fin Columna--}}

        </div>  
            
        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Nuevo/reingreso:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            @if ($asignacion->nuevo_reingreso == 1)            
              <p>Nuevo ingreso</p>
            @elseif ($asignacion->nuevo_reingreso == 2)
              <p>Reingreso</p>
            @endif          
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Tercera Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Certificado:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$asignacion->certificado}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Cuarta Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Clave:</label>
          </div> {{--Fin Columna--}}
            
          <div class="col"> {{--Segunda Columna --}}
            <p>{{$asignacion->clave_estudiante}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Quinta Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Estudiante:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            @foreach ($estudiantes as $estudiante)
              @if ($estudiante->id == $asignacion->estudiante_id)
                <p>{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</p>
              @endif
            @endforeach
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Sexta Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Ciclo</label>
          </div> {{--Fin Columna--}}
          
          <div class="col"> {{--Segunda Columna --}}            
            @foreach($ciclos as $ciclo)
              @if($ciclo->id == $asignacion->ciclo_id)
                <p>{{ $ciclo['fecha_inicio'] }} - {{ $ciclo['fecha_fin'] }}</p>
              @endif
            @endforeach
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Septima Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Grado</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            @foreach($grados as $grado)
              @if($grado->id == $asignacion->grado_id)
                <p>{{ $grado['grado'] }}</p>
              @endif
            @endforeach
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Ocatava Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Seccion</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            @foreach($secciones as $seccion)
              @if($seccion->id == $asignacion->seccion_id)
                <p>{{ $seccion['seccion'] }} - {{ $seccion['grado_id'] }}</p>
              @endif
            @endforeach
          </div> {{--Fin Columna--}}            
        </div>

      </div>
    </div>
  </div>  
</div>
@endsection
