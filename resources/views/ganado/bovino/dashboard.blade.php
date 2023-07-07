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
    <header class="bg-gradient-to-r from-cyan-700 to-amber-700 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png')}}" class="h-14">
        </div>

        <nav class="space-x-4">
            <a href="crear" class="text-gray-300 hover:text-white">Siembra</a>
            <a href="#" class="text-gray-300 hover:text-white">Terreno</a>
            <a href="#" class="text-gray-300 hover:text-white">Fertilizacion</a>
            <a href="#" class="text-gray-300 hover:text-white">Semilla</a>
            <a href="#" class="text-black-300 border:bg-cyan-100 hover:text-white font-bold text-xl"></a>
        </nav>

        <x-bladewind.button class="bg-gradient-to-r from-green-600 to-cyan-600 hover:bg-cyan-200 text-white px-4 py-2 rounded">Cerrar Sesión</x-bladewind.button>
    </header>
    <body class="bg-cover bg-no-repeat bg-center h-screen" style="background-image: url('../img/fondo6.jpg')">

      <div class="bg-gradient-to-r from-green-800 to-amber-400 p-8 m-4 bg-opacity-50">
        <p class="text-4xl text-white font-semibold uppercase">Bienvenido a Agromax Producción de Ganadería Bovina</p>
      </div>
      
      <div class="container px-8 py-8 flex flex-row justify-between mt-4">
        <ul class="text-white w-full md:w-auto font-extrabold">
          <li class="mb-2 font-semibold">Aquí tienes guías y manuales para sacar el máximo provecho a tu producción animal:</li>
          <!-- Añade aquí más manuales con sus enlaces -->
          <!-- Ejemplo: -->
          <li><a href="<URL>">Manual 1</a></li>
          <li><a href="<URL>">Manual 2</a></li>
          <li><a href="<URL>">Manual 3</a></li>
        </ul>
        
        <p class="text-white w-full md:w-auto text-right bg-gray-100 bg-opacity-50 text-xl font-extrabold">
          Gestión: Permite llevar un control eficiente de todas las actividades relacionadas con la ganaderia bovina.<br>
          ehgduyasgedfuisfbdsjfbdbfj<br>
          bfdhegduyfgasuygdysagdyasg
        </p>
      </div>


    

    <footer class="bg-gradient-to-r from-cyan-700 to-amber-700 text-white p-4 fixed bottom-0 w-full">
            <div class="container mx-auto mt-8">
            <p class="text-center text-white">© Agromax 2023. Todos los derechos reservados.</p>
        </div>
    </footer>

    </body>
</body>

</html>