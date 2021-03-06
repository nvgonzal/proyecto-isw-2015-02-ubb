<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pagina creada para el ramo de ingenieria de software">
        {!! Html::style('css/bootstrap.css') !!}
        {!! Html::style('css/estilo.css') !!}
        {!! Html::style('css/bootstrap-datepicker3.min.css') !!}
        <title>@yield('titulo') | Colegio Alba</title>

    </head>

    <body>
        <header style="background-color: #9e0b37">
            <div class="container" align="center">
                {!! Html::image('img/banner.jpg','Banner',['class'=>'img-responsive'],null) !!}
            </div>
        </header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand">
                        {!! HTML::image('img/logo.png','logo.png',['class'=>'img-responsive repon']) !!}
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{!! URL::to('/home') !!}">Colegio Alba</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false">Empleados
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('empleados')}}">Empleados activos</a></li>
                                <li><a href="{{URL::to('empleados/desvinculados')}}">Empleados desvinculados</a></li>
                            </ul>
                        </li>
                        <li><a href="{!! Url::to('asistencia') !!}">Asistencia</a></li>
                        <li><a href="{!! URL::to('liquidaciones') !!}">Liquidaciones</a></li>
                    </ul>
                    <!--Barra para buscar-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu gestion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('afp')}}">Gestion AFP</a></li>
                                <li><a href="{{URL::to('isapres')}}">Gestion Instituto de salud</a></li>
                            </ul>
                        </li>
                        <li><a href="{{URL::to('auth/register')}}">Registrar cuenta</a></li>
                        @if(Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false">{{ Auth::user()->rut }}
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ URL::to('auth/logout') }}">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                            @else
                            <li><a>Modo de pruebas</a></li>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            @include('flash::message')
            @yield('contenido')
        </div>
       <footer class="footer">
           <div class="text-center">
               <h4>Pagina creada para el ramo de ingenieria de software</h4>
           </div>
        </footer>
        {!! Html::script('js/jquery-1.11.3.js') !!}
        {!! Html::script('js/bootstrap.js') !!}
        @yield('javascript')
    </body>

</html>