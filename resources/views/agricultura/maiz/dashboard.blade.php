@extends('main')

@section('app')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido, has crecer tu siembra con AGROMAX</title>
</head>
<body>
    <header class="bg-gradient-to-r from-green-700 to-amber-700 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
          <img src="{{ asset('img/logo.png')}}" class="h-14">
        </div>
      
        <nav class="space-x-4">
          <a href="agricultura/maiz/semilla/crear" class="text-gray-300 hover:text-white">Siembra</a>
          <a href="#" class="text-gray-300 hover:text-white">Terreno</a>
          <a href="#" class="text-gray-300 hover:text-white">Fertilizacion</a>
          <a href="#" class="text-gray-300 hover:text-white">Semilla</a>
         <a href="#" class="text-black-300 border:bg-cyan-100 hover:text-white font-bold text-xl"></a>
        </nav>
      
        <x-bladewind.button class="bg-gradient-to-r from-green-600 to-cyan-600 hover:bg-cyan-200 text-white px-4 py-2 rounded">Cerrar Sesión</x-bladewind.button>
      </header>
    
</body>
</html>