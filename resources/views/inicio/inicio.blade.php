@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-trans">
                <div class="card-header card-header-primary">
                    <h3 class="card-title">
                        Inicio
                    </h3>
                    <p class="card-category">
                        Datos Generales
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">supervisor_account</i>
                    </div>
                    <p class="card-category">Administradores</p>
                    <h3 class="card-title">3</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#" class="btn btn-sm">Ver</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">assignment_ind</i>
                    </div>
                    <p class="card-category">Docentes</p>
                    <h3 class="card-title">11</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#" class="btn btn-sm">Ver</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">face</i>
                    </div>
                    <p class="card-category">Encargados</p>
                    <h3 class="card-title">10</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#" class="btn btn-sm">Ver</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">Estudiantes</p>
                <h3 class="card-title">205</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <a href="#" class="btn btn-sm">Ver</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <style>
        .card-footer{
            justify-content: center !important;
        }
        .card-trans{
            background: rgba(0%, 0%, 0%, 0%);
            box-shadow: none;
        }
    </style>
@endsection
