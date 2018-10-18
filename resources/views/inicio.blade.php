@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card-header">Inicio</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Has iniciado sesión 
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection
