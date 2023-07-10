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
          <a href="crear" class="text-gray-300 hover:text-white">Siembra</a>
          <a href="#" class="text-gray-300 hover:text-white">Terreno</a>
          <a href="#" class="text-gray-300 hover:text-white">Fertilizacion</a>
          <a href="#" class="text-gray-300 hover:text-white">Semilla</a>
         <a href="#" class="text-black-300 border:bg-cyan-100 hover:text-white font-bold text-xl"></a>
        </nav>
      
        <x-bladewind.button class="bg-gradient-to-r from-green-600 to-cyan-600 hover:bg-cyan-200 text-white px-4 py-2 rounded">Cerrar Sesión</x-bladewind.button>
      </header>
      <body class="bg-cover bg-no-repeat bg-center h-screen" style="background-image: url('../img/fondo10.jpg')">

        <main class="flex-1 overflow-y-auto p-4 bg-cover bg-center" style="background-image: url('..img/fondo10.jpg')"> 
          <div class="max-w-6xl mx-auto bg-white bg-opacity-75 rounded p-4 shadow"> 
            <h1 class="text-lg font-bold mb-4">Bienvenido a Agromax Siembra de Maiz</h1> 
            <div class="flex"> 
              <div class="w-1/2"> 
                <p>La tecnología juega un papel importante en la agricultura moderna. Con el uso de herramientas y técnicas avanzadas, los agricultores pueden aumentar la eficiencia y la productividad de sus cultivos.</p> 
                <p>Agromax es un sistema que ayuda a los agricultores a aprovechar al máximo la tecnología en sus operaciones agrícolas. Con Agromax, puedes monitorear y controlar tus cultivos desde cualquier lugar, tomar decisiones informadas y mejorar tus resultados.</p> 
              </div> 
              <div class="w-1/2 pl-4"> 
                <img src="image1.jpg" alt="image1" class="w-full rounded shadow mb-4"> 
                <img src="image2.jpg" alt="image2" class="w-full rounded shadow"> 
              </div> 
            </div> 
          </div> 
      </main>


      <footer class="bg-gradient-to-r from-cyan-700 to-amber-700 text-white p-4 fixed bottom-0 w-full bg-gradient-to-r from-green-700 to-amber-700">
          <p class="text-center text-white">© Agromax 2023. Todos los derechos reservados.</p>
     
      </footer>
    
</body>
</html>