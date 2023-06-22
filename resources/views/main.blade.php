<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo', config('app.name'))</title>
        <!-- estilos bases -->
        <!-- ejecuciones bases -->
        {{-- <script src="{{asset('build/assets/main-b7100ee5.js')}}"></script> --}}
    </head>
    <body>
        @yield('pre-contenido')
        <div id="app">
            @yield('app', 'hello word')
        </div>
        @yield('post-contenido')
    </body>
    @yield('post-script')
    <script src="{{asset('build/assets/main-ac434f61.js')}}"></script>
</html>