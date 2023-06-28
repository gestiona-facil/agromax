<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo', 'Bienvenido') - {{ config('app.name') }}</title>
        <!-- estilos bases -->
        @yield('pre-links')
        <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
        <!-- ejecuciones bases -->
        @yield('pre-scripts')
    </head>
    <body>
        @yield('pre-contenido')
        <div id="app">
            @yield('app')
        </div>
        @yield('post-contenido')
        
    </body>

    <script src="{{asset('build/main.js')}}"></script>
    @yield('post-script')
    
</html>