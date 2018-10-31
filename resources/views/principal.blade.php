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

    <title>@yield('title', 'INBASA')</title>
</head>
<body >

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100">
    	<div class="container">
        	<!-- Toogle para dispositivos móviles -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="{{ url('/') }}">INBASA</a>
        	</div>

        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
                    @auth
                        <li>
                            <a href="{{ url('/inicio') }}" class="btn btn-rose btn-round">
                                <i class="material-icons">home</i>Inicio
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('/desarrolladores') }}" class="btn btn-white btn-simple">
                                <i class="material-icons">work</i> Desarrolladores
                            </a>
                        </li>
                        <li class="button-container">
                            <a class="btn btn-rose btn-round" href="{{ route('login') }}">
                                <i class="material-icons">person_pin</i> Iniciar Sesión
                            </a>
                        </li>
                    @endauth
        		</ul>
        	</div>
    	</div>
    </nav>

    <!--  Fondo  -->
    <div class="page-header header-filter bg-header" data-parallax="true" style="background-image: url('{{ asset('img/bg_header.jpg') }}');">
        <div class="container">
            <div class="row">
				<div class="col-xs-10 col-sm-8">
					<h1 class="title">@yield('txtPrincipal', 'INBASA')</h1>
                    <h4>@yield('txtSecundario', 'Instituto Básico por Cooperativa San Andrés Chápil, San Pedro Sacatepéquez.')</h4>
				</div>
            </div>
        </div>
    </div>

    <!-- Contenedor Principal -->
    <div class="main main-raised">
        <div class="container  cont">
            @yield('content')
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