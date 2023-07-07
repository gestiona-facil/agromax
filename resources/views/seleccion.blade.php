@extends('main')

@section('app')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selecciona tu Producción</title>
</head>
<body>
  <div class="h-screen bg-gradient-to-r from-green-700 to-cyan-700">
    <header class="flex justify-between">
        <div class="flex items-center justify-center w-1/2 h-16">
          <h1 class="text-white text-center">PRODUCCION AGRICOLA (Siembra)</h1>
        </div>
        <div class="flex items-center justify-center w-1/2 h-16 bg-cyan-600">
          <h1 class="text-white text-center">PRODUCCION ANIMAL (Ganaderia)</h1>
        </div>
      </header>
    
    <!-- Botón Maiz -->
<button class="fixed left-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white px-4 py-2 rounded"><a href="Inicio">Maiz</a></button>

<!-- Botón Bovino -->
<button class="fixed right-0 top-1/2 transform -translate-y-1/2 bg-cyan-500 text-white px-4 py-2 rounded">Bovino</button>
      
</body>
</html>