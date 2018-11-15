@extends('layouts.app')
@section('title', 'Encargado')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('encargado.index') }}">Lista de encargados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('encargado.create') }}">Nuevo encargado</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('encargado.pdf') }}">Exportar PDF</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="">lista de Detalles</a>
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
          <h3>Detalles del encargado</h3>
        </center>
        <div class="form-row"> {{--Primera Fila --}} 
          <div class="col">{{--Primera Columna --}}    
            <label>Primer Nombre:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$encargado->p_nombre}}</p>                 
          </div> {{--Fin Columna--}}
    
          <div class="col">{{--Primera Columna --}}
            <label>Segundo Nombre:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            <p>{{$encargado->s_nombre}}</p>        
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Primer Apellido:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$encargado->p_apellido}}</p>
          </div> {{--Fin Columna--}}
     
          <div class="col">{{--Primera Columna --}}
            <label>Segundo Apellido</label>
          </div> {{--Fin Columna--}}
            
          <div class="col"> {{--Segunda Columna --}}
            <p>{{$encargado->s_apellido}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Fecha de nacimiento:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$encargado->fecha_nac}}</p>
          </div> {{--Fin Columna--}}
     
          <div class="col">{{--Primera Columna --}}
            <label>Direccion:</label>
          </div> {{--Fin Columna--}}
            
          <div class="col"> {{--Segunda Columna --}}
            <p>{{$encargado->direccion}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Telefono:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$encargado->telefono}}</p>
          </div> {{--Fin Columna--}}
     
          <div class="col">{{--Primera Columna --}}
            <label>Cui:</label>
          </div> {{--Fin Columna--}}
            
          <div class="col"> {{--Segunda Columna --}}
            <p>{{$encargado->cui}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Usuario:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
          @foreach($users as $user)
            @if($user->id == $encargado->usuario_id)            
              <p>{{ $user['username']}}</p>
            @endif
          @endforeach
          </div> {{--Fin Columna--}}

          <div class="col">{{--Primera Columna --}}
            <label>Actualizacion:</label>
          </div> {{--Fin Columna--}}
            
          <div class="col"> {{--Segunda Columna --}}
            <p>{{$encargado->updated_at}}</p>
          </div> {{--Fin Columna--}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
