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

  <button class="bg-blue-500 hover:bg-blue-500 text-white px-4 py-2 rounded">Cerrar Sesión</button>
</header>
<x-bladewind.centered-content>

<article class="mx-auto">
    <h2 class="text-2xl font-bold">AGROMAX: Máxima Eficiencia en la Gestión de Granjas Integrales</h2>
    <p class="mt-4">
      <cite>
        Agromax es un sistema innovador diseñado para automatizar y optimizar la agro-gestión en granjas integrales,
        permitiendo a los agricultores y ganaderos obtener el máximo provecho de sus actividades de siembra y cría de animales.
        Este sistema revolucionario combina tecnología avanzada con conocimientos agrícolas y pecuarios para ofrecer
        una solución integral que abarca todos los aspectos de la producción agropecuaria.
      </cite>
    </p>
    <p class="mt-4">
      Una de las características más destacadas de Agromax es su capacidad para gestionar diferentes tipos de animales,
      incluyendo ganadería bovina, porcina y caprina. El sistema proporciona herramientas específicas para cada tipo de
      animal, permitiendo un control exhaustivo sobre su alimentación, salud, reproducción y crecimiento.
      Esto garantiza que los animales reciban el cuidado adecuado en cada etapa de su desarrollo, lo que se traduce en
      una mejor calidad de vida y un aumento en la productividad.
    </p>

    </x-bladewind.centered-content>
  </article>