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
    <header class="flex justify-between bg-green-500">
        <div class="flex items-center justify-center w-1/2 h-16">
          <h1 class="text-white text-center">PRODUCCION AGRICOLA (Siembra)</h1>
        </div>
        <div class="flex items-center justify-center w-1/2 h-16 bg-cyan-700">
          <h1 class="text-white text-center">PRODUCCION ANIMAL (Ganaderia)</h1>
        </div>
      </header>
    
    <!-- Botón Maiz -->
<button class="fixed left-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white px-4 py-2 rounded">Maiz</button>

<!-- Botón Bovino -->
<button class="fixed right-0 top-1/2 transform -translate-y-1/2 bg-cyan-500 text-white px-4 py-2 rounded">Bovino</button>
      <!-- Imágenes de fondo -->
        body {
            background-image: url('..public/fondos/fondo1.jpg'), url('imagen2.jpg');
            background-position: left, right;
            background-repeat: no-repeat;
            background-size: 50% 100%, 50% 100%;
        }

    
</body>
</html>