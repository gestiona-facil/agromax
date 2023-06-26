<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo', config('app.name'))</title>
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

    @yield('post-script')
    <script src="{{asset('build//assets/main-41f49559.js')}}"></script>
    
</html>