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

      <div class="bg-gradient-to-r from-green-800 to-amber-400 p-8">
        <p class="text-4xl text-white font-semibold uppercase">Bienvenido a Agromax Siembra</p>
        <ul class="mt-4 text-white">
          <li class="mb-2">
            <span class="font-semibold">Gestión:</span> Permite llevar un control eficiente de todas las actividades relacionadas con la siembra.
          </li>
          <li class="mb-2">
            <span class="font-semibold">Automatización:</span> Automatiza tareas repetitivas para ahorrar tiempo y recursos.
          </li>
          <li class="mb-2">
            <span class="font-semibold">Optimización:</span> Mejora la eficiencia en la planificación y ejecución de los procesos agrícolas.
          </li>
          <!-- Añade aquí más beneficios con sus descripciones -->
        </ul>
      </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <footer class="bg-gradient-to-r from-green-700 to-amber-700">
        <div class="container mx-auto flex flex-wrap justify-between">
          <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
            <h3 class="text-white text-center text-lg font-bold mb-4">AGROMAX: Máxima Eficiencia en la Gestión de Granjas Integrales</h3>
          </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
            <h3 class="text-white text-center text-lg font-bold mb-4">Contactanos a nuestro Email: info@nuestragranja.com</h3>
        </div>
        <div class="container mx-auto mt-8">
          <p class="text-center text-white">© Agromax 2023. Todos los derechos reservados.</p>
        </div>
      </footer>
    
</body>
</html>