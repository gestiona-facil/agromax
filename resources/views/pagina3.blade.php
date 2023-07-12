@extends ('main')

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
            La nueva actualización de OpenAI permite crear imagenes usando ChatGPT  :
        </h1> 
        </div>
    
    <br>
    <h2 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-4xl xl:text-3xl dark:text-white">ESTO ES REAL... </h2>
    <div class="px-4 py-4 ">
        <p class=" mb-6 font-bold text-gray-800 text-xl text-justify ">
            
            OpenAI es una empresa que utiliza la inteligencia artificial y el aprendizaje automático para crear contenidos. Ahora mismo, 
            OpenAI está en boca de todos, especialmente con el chatbot de IA ChatGPT, pero OpenAI puede generar imágenes y otros contenidos
            creativos. En este blog, veremos los detalles técnicos de cómo OpenAI crea imágenes y cómo esta tecnología puede ayudarnos a
            resolver algunos de nuestros problemas creativos. <br><br>
        
            Las imágenes OpenAI son un nuevo tipo de imágenes generadas por máquinas mediante inteligencia artificial (IA) y aprendizaje automático.
             Se utilizan para resaltar distintos aspectos de la creatividad visual y crear experiencias visuales únicas. Las imágenes de OpenAI son 
             potentes, pero también muy flexibles: se pueden utilizar para muchos proyectos diferentes.
        </p> 
            <h2 class="text-2xl font-bold">
            ¿La IA avanza mas rápido de lo que esperábamos?</h2> <br>
            <p class= " mb-6 font-bold text-gray-800 text-xl text-justify">
                
                OpenAI ha desarrollado una serie de innovaciones con el generador de
                 imágenes de IA DALLE-2 que les permite crear imágenes. Una de las áreas de 
                 investigación más recientes es la IA Generativa. Esta tecnología de IA Generativa permite a 
                 OpenAI crear imágenes artificiales basadas en una gran Red Neuronal de IA (el cerebro de la IA). La IA puede generar imágenes completamente 
                 nuevas y originales utilizando una base de datos de imágenes existentes. <br>
                 Todo lo que tienes que hacer es introducir un texto describiendo la imagen que quieres y la IA hace el resto.
                Esto permite a OpenAI crear imágenes que no sólo parecen realistas, sino que también tienen una funcionalidad real. 
                Esta técnica se mejora constantemente y puede utilizarse para una amplia gama de aplicaciones.

                <h2>Imagenes creadas con DALL-E 2</h2>
                <img src={{ asset('img/a1.jpg')}} class="h-30"> <br> <br>

                <img src={{ asset('img/a3.jpeg')}} class="h-30"> <br><br>

                <img src={{ asset('img/a2.jpg')}} class="h-30">


        </p>
        
        
            </form>
    </div>
</body>
</html>

