<html>
    <head>
        <title>@yield('titulo') - Agromax</title>
        @include('ganado.bovino.exportar.style')
    </head>
    <body>
        <div>
            <img src="http://agromax.com/img/logo-export.jpg">
        </div>
        <div>
            @yield('contenido')
        </div>
    </body>
</html>