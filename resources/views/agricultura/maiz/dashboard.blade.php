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
          <a href="{{ route('siembra.create')}}" class="text-gray-300 font-bold hover:text-white">Siembra</a> 
          <a href="{{ route('terreno.create')}}" class="text-gray-300 font-bold hover:text-white">Terreno</a> 
          <a href="{{ route('fertilizacion.create')}}" class="text-gray-300 font-bold hover:text-white">Fertilizacion</a> 
          <a href="{{ route('semilla.create')}}" class="text-gray-300 font-bold hover:text-white">Semilla</a> 
         <a href="#" class="text-black-300 border:bg-cyan-100 hover:text-white font-bold text-xl"></a> 
        </nav> 
       
        <x-bladewind.button class="bg-gradient-to-r from-green-600 to-cyan-600 hover:bg-cyan-200 text-white px-4 py-4 rounded">Cerrar Sesión</x-bladewind.button> 
      </header> 
      <body class="bg-cover bg-no-repeat bg-center full-screen" style="background-image: url('../img/fondo1.jpg')"> 
 
        <main class="flex-1 overflow-y-auto p-4 bg-cover bg-center" style="background-image: url('..img/fondo10.jpg')">  
          <div class="max-w-7xl mx-auto bg-white bg-opacity-75 rounded p-4 shadow">  
            <h1 class="text-3xl font-extrabold mb-4">Bienvenido a Agromax Siembra de Maiz</h1>  
            <div class="flex">  
              <div class="w-6/10 pr-4">  
                <p class="font-bold text-2xl"> Con <b>Agromax</b>, puedes monitorear y controlar tus cultivos desde cualquier lugar,
                   tomar decisiones informadas y mejorar tus resultados. Además tambien posee una serie de ventajas: <br><br> 
                   1. Organización: Un sistema de gestión te permite tener un registro ordenado y estructurado de tus siembras,
                    lo que facilita el seguimiento y control de cada una de ellas. <br><br>

                   2. Control de datos: Puedes registrar información detallada sobre cada siembra, como el tipo de semilla utilizada, las fertilizaciones aplicadas, los tipos de riego utilizados, entre otros.
                    Esto te permite tener un control preciso de todos los aspectos relacionados con tus siembras. <br><br>
                   
                   3. Toma de decisiones informadas: Al contar con datos precisos y actualizados sobre tus siembras, puedes tomar decisiones basadas en información concreta.
                    Por ejemplo, puedes analizar qué tipo de semilla ha dado mejores resultados en determinadas condiciones o qué tipo de riego ha sido más efectivo. <br> <br>
                   
                   4. Optimización de recursos: Al tener un registro detallado de las fertilizaciones y los tipos de riego utilizados en cada siembra,
                    puedes identificar patrones y tendencias que te ayuden a optimizar el uso de recursos como agua y fertilizantes.
                     Esto puede resultar en ahorro económico y reducción del impacto ambiental. <br><br>
                   
                   5. Seguimiento de cosechas: Con un sistema de gestión, puedes registrar las cosechas obtenidas en cada siembra y
                    tener un historial completo de los rendimientos. Esto te permite evaluar la productividad de tus cultivos y realizar 
                    análisis comparativos entre diferentes siembras. <br><br>
                   
                   6. Informes y análisis: Un sistema de gestión te brinda la posibilidad de generar informes y análisis sobre tus siembras.
                    Puedes obtener estadísticas, gráficos y tendencias que te ayuden a evaluar el desempeño de tus cultivos y tomar decisiones estratégicas. <br><br></p>  
              </div>  
              <div >
                <!-- Slider -->
                <div>
                  <!-- Slides -->

                  <!-- Dots -->
                </div><br><br>
                <!-- Lista de guías y manuales para la siembra -->
                <h2 class="text-2xl font-bold mb-2 ">Guías y manuales para la siembra</h2>
                <ul class="list-disc ">
                  <li><a href="{{ asset('img/cuidados.pdf')}}" class="text-black font-bold hover:underline">Control de pestes</a></li>
                  <li><a href="{{ asset('img/guia_semillas1.pdf')}}" class="text-black font-bold hover:underline">Recoleccion de semillas</a></li>
                  <li><a href="{{ asset('img/manualcultivo.pdf')}}" class="text-black font-bold hover:underline">Manual para el cultivo</a></li>
                  <li><a href="{{ asset('img/prepsuelos.pdf')}}" class="text-black font-bold hover:underline">Preparacion de suelos</a></li>
                </ul>
              </div>  
            </div>  
          </div>  
      </main> 
 
 
      <footer class="bg-gradient-to-r from-cyan-700 to-amber-700 text-white p-4 fixed bottom-0 w-full bg-gradient-to-r from-green-700 to-amber-700"> 
          <p class="text-center text-white">© Agromax 2023. Todos los derechos reservados.</p> 
      
      </footer> 
     
</body> 
</html>