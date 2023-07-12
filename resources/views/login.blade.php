@extends('main')

@section('app')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicia Sesion en Agromax</title>
</head>

<body class="bg-cover bg-no-repeat bg-center h-screen bg-opacity-70 " style="background-image: url('../img/f2.jpg') ">

    <div class="flex justify-center items-center h-screen opacity-90 ">
        <form action="{{ route('auth-inspeccion') }}" method="post" class="w-1/3 bg-gradient-to-r from-cyan-700 to-amber-700 rounded shadow p-8">
            @csrf
            <img src="{{ asset('img/logo.png') }}" class="h-14">
            <h1 class="text-2xl font-bold mb-4 text-center">Iniciar Sesión</h1>
    
            <div class="mb-4">
                <x-bladewind.input
                    name="email"
                    label="Email:"
                    required="true"
                    prefix="envelope"
                    prefix_is_icon="true"
                    class="border-cyan-700"
                />
                <a href="#" class="underline text-sm text-cyan-700">Recuperar contraseña</a>
            </div>
    
            <div class="mb-3">
                <x-bladewind.input
                    type="password"
                    name="password"
                    label="Contraseña"
                    required="true"
                    prefix="key"
                    prefix_is_icon="true"
                    class="border-cyan-700"
                />
            </div>
    
            <div>
                <x-bladewind.button
                    can_submit="true"
                    class="mt-4 bg-cyan-500 focus:ring-cyan-500"
                >Iniciar</x-bladewind.button>
            </div>
            {{-- La seccion de registro aparecerá automaticamente en caso de que no exista usuario en BD --}}
        </form>
    </div>
    
</body>
</html>


