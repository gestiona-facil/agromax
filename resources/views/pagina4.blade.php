@extends('main')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog IA </title>
</head>
<body class=" bg-center h-screen" style="background-image: url('../img/logoc.jpg')">


    <header class="bg-gradient-to-l from-cyan-700 to-blue-600 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
          <img src="{{ asset('img/logogpt.jpg')}}" class="h-20">
        </div>

        <nav class="space-x-4">
            <a href="#" class="text-gray-300 hover:text-white">Imagenes</a>
            <a href="#" class="text-gray-300 hover:text-white"> Evidencias</a>
            <a href="#" class="text-gray-300 hover:text-white"> Novedades</a>
           <a href="#" class="text-black-300 border:bg-cyan-100 hover:text-white font-bold text-xl">Conoce más sobre la Inteligencia Artificial</a>
          </nav>
    </header>
    
    </div>
 <form >
    <div class="w-2/3 bg-white rounded shadow p-8">
            <div class="container mx-auto p-8 bg-gradient-to- from bg-cyan-500 to-gray-300">

        <h1 class=" mb-4 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-center">
            ¿Qué tan eficiente es la IA a la hora de responder y
            Qué dice la Inteligencia Artificial sobre sí misma? :
        </h1> 
        </div>
    
    <br>
    <h2 class=" mb-4 text-4xl font-bold tracking-tight leading-none md:text-4xl xl:text-3xl dark:text-white">LA INTELIGENCIA ARTIFICIAL PASA A LA ACCIÓN </h2>
    <div class="px-4 py-4 ">
        <p class=" mb-6 font-bold text-gray-800 text-xl text-justify ">
           Usar ChatGPT es mas fácil de lo que crees, puedes descargar Bing y utilizar el chat incorporado o simplemente usar uno de los numerosos bots de Telegram
           y Whatsapp. A continuación verás una serie de imágenes de las capacidades que tiene disponibles e incluso le haremos preguntas como: <br> <br>
           * Si podría superar la inteligencia humanidad <br> <br>
           *¿Cuál es su propósito? <br> <br>
           * Y Si tuviera la oportunidad de cambiar el mundo ¿Cómo lo Haría?
           
        </p> 
            <h2 class="text-2xl font-bold">
            ¿La IA avanza mas rápido de lo que esperábamos?</h2> <br>
            <p class= " mb-6 font-bold text-gray-800 text-xl text-justify">
                

                <h2>Imagenes creadas con DALL-E 2</h2>
                <img src={{ asset('fondos/1.jpg')}} class="h-30"> <br> <br>

                <img src={{ asset('fondos/2.jpg')}} class="h-30"> <br><br>

                <img src={{ asset('fondos/3.jpg')}} class="h-30">

                <img src={{ asset('fondos/4.jpg')}} class="h-30"> <br> <br>

                <img src={{ asset('fondos/5.jpg')}} class="h-30"> <br><br>

                <img src={{ asset('fondos/6.jpg')}} class="h-30">

                <img src={{ asset('fondos/7.jpg')}} class="h-30"> <br> <br>

                <img src={{ asset('fondos/8.jpg')}} class="h-30"> <br><br>

                <img src={{ asset('fondos/9.jpg')}} class="h-30">

                <img src={{ asset('fondos/12.jpg')}} class="h-30">

                <img src={{ asset('fondos/13.jpg')}} class="h-30">

                <img src={{ asset('fondos/14.jpg')}} class="h-30">

                <img src={{ asset('fondos/15.jpg')}} class="h-30">



        </p>
        
        
            </form>
    </div>
</body>
</html>