<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <!--     Iconos y Fuentes     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" /> --}}

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
    <link href="{{ asset('css/principal.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body >

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100">
        <div class="container">
            <!-- Toogle para dispositivos móviles -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" style="color: black;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" style="color: black;">INBASA</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @auth
                        <li>
                            <a href="{{ url('/inicio') }}" class="btn btn-rose btn-round">
                                <i class="material-icons">person</i>Inicio
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('/desarrolladores') }}" class="btn btn-white btn-simple">
                                <i class="material-icons">work</i> Desarrolladores
                            </a>
                        </li>
                        <li class="button-container">
                            <a class="btn btn-rose btn-round" href="{{ url('/') }}">
                                <i class="material-icons">home</i> Principal
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenedor Principal -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="header header-primary text-center">
                                <h4 class="card-title">Iniciar Sesión</h4>
                            </div>
                            <p class="description text-center">Ingrese sus datos</p>
                            {{-- Mensaje de Error si no se autentica antes el usuario y desea acceder a otra ruta --}}
                            @if (session()->has('flash'))
                            <div class="alert alert-info">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <b>Info:</b> {{session('flash')}}
                                </div>
                            </div>
                            @endif
                            <div class="card-content">
                                {{-- Input usuario --}}
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">face</i>
                                    </span>
                                    <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Usuario*" name="username" value="{{ old('username') }}" required="true" autofocus>

                                    {{-- Mostrar mensaje de error --}}
                                    @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                {{-- Input contraseña --}}
                                <div class="input-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <input type="password" placeholder="Contraseña*" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="true"/>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="category form-category">* Campos Requeridos</div>
                            </div>
                            <div class="footer text-center">
                                <button class="btn btn-default btn-wd" style="margin-bottom:10px;">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Principal -->
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="https://www.umg.edu.gt" target="_blank">
                            UMG
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script> UMG - INGERNIERÍA
            </div>
        </div>
    </footer>

</body>

<!--   Scripts JS   -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
{{-- <script src="{{ asset('js/fontawesome.js') }}"></script> --}}
<script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
<!--    Centro de Control para Material Kit: ripples, efectos parallax,  -->
<script src="{{ asset('js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>


</html>