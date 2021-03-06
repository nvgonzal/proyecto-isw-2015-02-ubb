<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina creada para el ramo de ingenieria de software">
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/estilo.css') !!}
    @yield('estilos')
    <title> @yield('titulo') | Colegio Alba</title>
</head>

<body>
    <header style="background-color: #9e0b37">
        <div class="container" align="center">
            {!! Html::image('img/banner.jpg','Banner',['class'=>'img-responsive'],null) !!}
        </div>
    </header>
    @yield('contenido')
    <footer class="footer">
        <div class="text-center">
            <h4>Pagina creada para el ramo de ingenieria de software</h4>
        </div>
    </footer>
    {!! Html::script('js/bootstrap.js') !!}
    {!! Html::script('js/jquery-1.11.3.js') !!}
    @yield('javascript')
</body>