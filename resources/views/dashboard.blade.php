@extends('main')

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
  <div class="flex items-center">
    <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2">
    <h1 class="text-lg font-bold">Agromax</h1>
  </div>

  <nav class="space-x-4">
    <a href="#" class="text-gray-600 hover:text-white"></a>
    <a href="#" class="text-gray-300 hover:text-white"></a>
    <a href="#" class="text-black-300 hover:text-white">Conoce más sobre las ventajas de la agricultuta</a>
  </nav>

  <button class="bg-cyan-500 hover:bg-cyan-200 text-white px-4 py-2 rounded">Cerrar Sesión</button>
</header>

<div class="container w-1/2 h-1 rounded-full">
    
    <div class="bg-cyan-100 p-4">
  <h2 class="text-2x1 font-bold">AGROMAX: Máxima Eficiencia en la Gestión de Granjas Integrales</h2>
  <p class="text-lg text-black text-justify font-semibold">
    
    
      Agromax es un sistema innovador diseñado para automatizar y optimizar la agro-gestión en granjas integrales,
      permitiendo a los agricultores y ganaderos obtener el máximo provecho de sus actividades de siembra y cría de animales.
      Este sistema revolucionario combina tecnología avanzada con conocimientos agrícolas y pecuarios para ofrecer
      una solución integral que abarca todos los aspectos de la producción agropecuaria. <br><br>
    
  </p>


<div class="py-20 px-8 mx-auto bg-white rounded-xl shadow-lg space-y-2 flex justify-center">
  <x-bladewind.button>
      <a href="seleccion">Seleccionar Produccion</a>
  </x-bladewind.button>
</div>

<p class="text-lg text-black font-semibold text-justify">
  Una de las características más destacadas de Agromax es su capacidad<br> para gestionar diferentes tipos de animales,
  incluyendo ganadería bovina, porcina y caprina. El sistema proporciona<br> herramientas específicas para cada tipo de
  animal, permitiendo un control exhaustivo sobre su alimentación, salud,<br> reproducción y crecimiento.
  Esto garantiza que los animales reciban el cuidado adecuado en cada etapa de su desarrollo,<br> lo que se traduce en
  una mejor calidad de vida y un aumento en la productividad.
</p>
</div>

<div class="flex">
  <div class="w-1/4 bg-gray-200 p-4">
    <!-- Sidebar -->
  </div>
  <div class="w-3/4 p-4">
      <div class="w-1/4 bg-gray-200 p-4">
        <h2 class="text-lg font-bold mb-2">Información Curiosa</h2>
        <ul class="list-disc ml-4">
          <li>La tecnología de riego por goteo fue inventada en Israel.</li>
          <li>Los drones se utilizan para monitorear cultivos y detectar enfermedades.</li>
          <li>La inteligencia artificial se utiliza para optimizar los rendimientos agrícolas.</li>
        </ul>
      <h1 class="text-2xl font-bold mb-4">Tecnología en la Agricultura</h1>
      <p>La tecnología ha revolucionado la agricultura en los últimos años...</p>
    </div>
    <!-- Contenido principal -->
  </div>
</div>

</body>
