@extends('main') 

@section('app') 

<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Bienvenido, has crecer tu siembra con AGROMAX</title> 
</head> 
<body class="bg-cover bg-no-repeat bg-center full-screen" style="background-image: url('../img/fondo8.jpg')"> 
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
 
      <div class="bg-gradient-to-r from-green-800 to-amber-400 p-8 m-4 "> 
        <p class="text-4xl text-white font-semibold uppercase">Bienvenido a Agromax Producción de Ganadería Bovina</p> 
      </div> 

      <div class="container px-8 py-8 flex flex-row justify-between mt-4 space-x-4"> 
        <ul class="text-white w-full md:w-auto font-extrabold bg-blue-500 bg-opacity-60 p-4 rounded-lg shadow-md"> 
          <li class="mb-2 font-semibold">Aquí tienes guías y manuales para sacar el máximo provecho a tu producción animal:</li> 
          <!-- Añade aquí más manuales con sus enlaces --> 
          <!-- Ejemplo: --> 
          <li><a href="<URL>" class="hover:underline text-blue-200">Manual 1</a></li> 
          <li><a href="<URL>" class="hover:underline text-blue-200">Manual 2</a></li> 
          <li><a href="<URL>" class="hover:underline text-blue-200">Manual 3</a></li> 
        </ul> 

        <p class="text-white italic w-full md:w-auto text-right bg-gray-600 bg-opacity-50 text-2xl text-justify font-bold p-4 rounded-lg shadow-md">
          
          Entre las Ventajas que posee AGROMAX para el area de bovinos tenemos<br><br>1. Organización y seguimiento: El sistema permite llevar
           un registro detallado de cada animal, lo que facilita la organización y
          el seguimiento de su estado y actividades. Esto incluye información sobre las vacas madres, los toros utilizados para la reproducción,
          el estado de ordeño y la disponibilidad para engorde. <br><br>

          2. Mejora en la toma de decisiones: Al contar con información precisa sobre cada animal, los productores pueden tomar decisiones más informadas
          sobre la reproducción, el ordeño y el engorde. Por ejemplo, pueden identificar qué vacas son más productivas en términos de litros de leche o
          cuáles tienen mejores características genéticas para la reproducción.<br><br>

          3. Control del proceso reproductivo: El sistema permite llevar un registro detallado del linaje de cada animal, incluyendo información sobre los padres.
          Esto es especialmente útil para mantener un control efectivo del proceso reproductivo y evitar cruces indeseables o consanguinidad.<br><br>

          4. Optimización del engorde: Al tener un control preciso del destete de los becerros y su disponibilidad para engorde, se puede optimizar este proceso.
         Esto implica definir cuándo están listos para ser trasladados al área de vaca o engorde y realizar un seguimiento del peso y crecimiento durante esta etapa.<br><br>

           5. Control sanitario eficiente: El sistema también incluye un área dedicada al control sanitario, donde se registran los cuidados y 
          el historial médico de cada animal. Esto permite un control más eficiente de la salud del ganado, facilitando la detección temprana 
          de enfermedades y la implementación de medidas preventivas.<br><br>

          6. Ahorro de tiempo y recursos: Al automatizar el registro y seguimiento de todas estas actividades, se ahorra tiempo 
          y recursos que antes se destinaban a llevar registros en papel o de forma manual. Además, al contar con información precisa, 
          se pueden tomar decisiones más acertadas que optimicen el uso de recursos como alimento, medicamentos y mano de obra.<br><br>
    
        </p>
      </div><br><br><br>

    <footer class="bg-gradient-to-r from-cyan-700 to-amber-700 text-white p-4 fixed bottom-0 w-full">
            <div class="container mx-auto mt-8">
            <p class="text-center text-white">© Agromax 2023. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>
@endsection