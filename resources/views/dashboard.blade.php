@extends('main')

<!DOCTYPE html>
<html lang="es">
<head>
</head>
<title>Bienvenido</title>
<body class="bg-cover bg-no-repeat bg-center h-screen" style="background-image: url('../img/fondo8.jpg')">
  <header class="bg-cyan-700 text-white p-4 flex justify-between items-center">
    <div class="flex items-center">
      <img src="{{ asset('img/logo.png')}}" class="h-14">
    </div>

    <nav class="space-x-4">
      <a href="#" class="text-gray-600 hover:text-white"></a>
      <a href="#" class="text-gray-300 hover:text-white"></a>
      <a href="#" class="text-black-300 border:bg-cyan-100 hover:text-white font-bold text-xl">Conoce más sobre las ventajas de la agricultura</a>
    </nav>

    <button class="bg-cyan-500 hover:bg-cyan-200 text-white px-4 py-2 rounded">Cerrar Sesión</button>
  </header>
  <div class="container mx-auto flex flex-col md:flex-row">
    
    <div class="md:w-2/3 p-4">
      <div class="bg-cyan-150 p-4">
        <h2 class="text-2xl font-bold text-white">AGROMAX: Máxima Eficiencia en la Gestión de Granjas Integrales</h2>
        <p class="text-lg text-white text-justify font-semibold bg-black opacity-50 ">
          Agromax es un sistema innovador diseñado para automatizar y optimizar la agro-gestión en granjas integrales,
          permitiendo a los agricultores y ganaderos obtener el máximo provecho de sus actividades de siembra y cría de animales.
          Este sistema revolucionario combina tecnología avanzada con conocimientos agrícolas y pecuarios para ofrecer
          una solución integral que abarca todos los aspectos de la producción agropecuaria.

        </p>
      </div>

      <div class="py-8 px-8 mx-center rounded-xl shadow-lg space-y-2 flex justify-center items-center">
        <x-bladewind.button style="bg-transparent">
          <a href="seleccion">Seleccionar Produccion</a>
        </x-bladewind.button>
      </div>

      <div>
        <p class="text-lg text-black font-bold text-justify bg-white opacity-60 ">
          Una de las características más destacadas de Agromax es su capacidad para gestionar diferentes tipos de animales,
          incluyendo ganadería bovina, porcina y caprina. El sistema proporciona herramientas específicas para cada tipo de
          animal, permitiendo un control exhaustivo sobre su alimentación, salud, reproducción y crecimiento.
          Esto garantiza que los animales reciban el cuidado adecuado en cada etapa de su desarrollo,
          lo que se traduce en una mejor calidad de vida y un aumento en la productividad.
        </p>
      </div>
    </div>

    <div class="md:w-1/3 p-4">
      <div class="bg-blue-200 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Beneficios de una Granja Integral Autosustentable</h2>

        <ul class="list-disc font-bold ml-6">
          <li class="mb-2">Sostenibilidad ambiental: Una granja integral autosustentable utiliza prácticas agrícolas y ganaderas que minimizan el impacto en el medio ambiente, como la conservación del suelo, el uso eficiente del agua y la reducción de emisiones de gases de efecto invernadero.</li>

          <li class="mb-2">Producción de alimentos saludables: Al cultivar alimentos de manera orgánica y sin el uso de pesticidas químicos, las granjas integrales autosustentables pueden ofrecer productos más saludables y nutritivos para los consumidores.</li>

          <li class="mb-2">Diversificación económica: Estas granjas suelen implementar sistemas agroforestales y criar diferentes tipos de animales, lo que les permite diversificar sus fuentes de ingresos y reducir la dependencia de un solo producto o mercado.</li>
        </ul>
      </div>
    </div>
  </div>
<footer class="bg-cyan-700 text-white p-4 fixed bottom-0 w-full">
    <p class="text-center">AGROMAX © 2023</p>
  </footer>
</body>

</html>