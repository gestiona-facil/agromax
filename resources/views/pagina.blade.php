@extends('main')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog IA Página Oficial</title>
</head>
<body class=" bg-no-repeat bg-center h-screen" style="background-image: url('../img/logoc.jpg')">


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
            <div class="container mx-auto p-6 bg-gradient-to- from bg-cyan-500 to-gray-300">

        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
            BIENVENIDO A IA Página oficial:
        </h1>
        </div>
    
    <br>
    <h2 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-4xl xl:text-3xl dark:text-white">Descubre y Aprende Mucho Más </h2>
    <div class="px-4 py-4 ">
        <p class="max-w-2xl mb-6 font-semibold text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-justify ">
            
            Sobre Lo más actualizado de la famosa IA que está revolucionando el mundo, tendras
            acceso a informacion reelevante sobre el tema y si no conoces nada sobre 
            ella al respecto pues toma asiento y deja que te mostremos si de verdad es
            útil o simplemente es menos de lo que parece.  Conocerás temas del momento como: 
            
            <br> <ul class="max-w-2x2 mb-6 font-semibold text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-justify ">
            <li>* ¿Por qué el llamado "Padrino de la IA" decidio dejar de trabajar en ella?</li> <br>
            <li>* El impacto que ha tenido, tanto positivo y negativo en la sociedad mundial</li> <br>
            <li>* Imagenes creadas por ChatGPT</li> <br>
            <li>* De que manera resuelve ejercicios matemáticos en tan solo segundos </li>
        </ul>
        
        </p> 
            <h2 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-4xl xl:text-3xl dark:text-white">
            ¿Qué es la Inteligencia artificial?</h2>
            <p class="max-w-2xl mb-6 font-bold text-gray-800 lg:mb-8 md:text-lg lg:text-sm dark:text-gray-400 text-justify">  
            La inteligencia artificial es una rama de la informática que se enfoca en crear sistemas o programas capaces de realizar tareas
            que normalmente requieren de la inteligencia humana. Estos sistemas pueden aprender, razonar, planificar, reconocer voz y texto, 
            y tomar decisiones basadas en datos y patrones. <br> <br>

                La inteligencia artificial se basa en algoritmos y modelos matemáticos que permiten  
                a las máquinas procesar grandes cantidades de información 
                y aprender de ella. Estos sistemas pueden ser utilizados en una amplia variedad de campos, 
                como la medicina, la robótica, los juegos, la traducción de idiomas, entre otros.
        </p>
        <h2 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
            ¿Qué es el famoso ChatGPT?</h2>
        <p class= "text-justify max-w-2xl mb-4 bg-cyan-300 ">
            <p>ChatGPT es un prototipo de chatbot de inteligencia artificial desarrollado en 2022 por OpenAI
                que se especializa en el diálogo. El chatbot es un gran modelo de lenguaje, ajustado
                con técnicas de aprendizaje tanto supervisadas como de refuerzo.
                Se basa en el modelo GPT-4 de OpenAI, una versión mejorada de GPT-3. <br>
            
                ChatGPT, cuyas siglas proceden del inglés Generative Pre-trained Transformer
                (en español Transformador Preentrenado Generativo), se perfeccionó sobre GPT-3.5 
                mediante el aprendizaje supervisado y el aprendizaje por refuerzo.
                Ambos enfoques utilizaron entrenadores humanos para mejorar el rendimiento del modelo. 
                En el caso del aprendizaje supervisado, se dotó al modelo de conversaciones en las que los formadores
                jugaban en ambos lados: el usuario y el asistente de IA.<br> <br> Si deseas conocer mas información sobre ChatGPT
                <a href="https://es.wikipedia.org/wiki/ChatGPT">Has click aqui</a> </p> <br>

            </form>
    </div>
</body>
</html>

