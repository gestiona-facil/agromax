@extends('main')

@section('app')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar Lateral</title>
</head>
<body class="flex h-screen bg-gray-100">
  <!-- Navbar Lateral -->
  <div class="flex flex-col w-64 bg-white border-r">
    <!-- Logo -->
    <div class="flex items-center justify-center h-16 border-b">
      <span class="text-xl font-bold">Logo</span>
    </div>

    <!-- Opciones del Navbar -->
    <nav class="flex-grow p-4 space-y-2">
      <!-- Opción Vaca -->
      <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Vaca</a>

      <!-- Desplegable de Vaca -->
      <details class="pl-4 space-y-2">
        <summary class="cursor-pointer">Vaca</summary>
        <!-- Opción Crear -->
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Crear</a>
        <!-- Opción Editar -->
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Editar</a>
      </details>
    </nav>
  </div>

  <details class="pl-4 space-y-2">
    <summary class="cursor-pointer">Toro</summary>
    <!-- Opción Crear -->
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Crear</a>
    <!-- Opción Editar -->
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Editar</a>
  </details>
</nav>
</div>

<details class="pl-4 space-y-2">
  <summary class="cursor-pointer">Becerro</summary>
  <!-- Opción Crear -->
  <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Crear</a>
  <!-- Opción Editar -->
  <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Editar</a>
</details>
</nav>
</div>

<details class="pl-4 space-y-2">
  <summary class="cursor-pointer">Ordeño</summary>
  <!-- Opción Crear -->
  <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Crear</a>
  <!-- Opción Editar -->
  <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Editar</a>
</details>
</nav>
</div>

  <!-- Contenido Principal -->
  <div class="flex-grow p-8">
    <h1 class="text-2xl font-bold">Contenido Principal</h1>
  </div>
</body>
</html>




</head>
<body>
    <!-- Navbar lateral -->
    <div class="flex h-screen bg-gray-100">
        <!-- Barra lateral -->
        <div class="bg-gray-800 text-white w-16 flex flex-col items-center">
            <!-- Logo -->
            <div class="h-16 w-full flex items-center justify-center">
                <span class="text-xl font-bold">Logo</span>
            </div>
            <!-- Opciones del navbar -->
            <div class="flex flex-col mt-10">
                <!-- Opción "vaca" con desplegable -->
                <div x-data="{ open: false }">
                    <!-- Botón para abrir/cerrar el desplegable -->
                    <button @click="open = !open" class="w-full py-2 px-4 bg-gray-700 hover:bg-gray-600">Vaca</button>
                    <!-- Contenido del desplegable -->
                    <div x-show="open" @click.away="open = false" class="bg-gray-700 mt-2 py-2 px-4">
                        <!-- Opción "crear" -->
                        <a href="#" class="block py-1 px-2 text-sm text-gray-300 hover:bg-gray-600">Crear</a>
                        <!-- Opción "editar" -->
                        <a href="#" class="block py-1 px-2 text-sm text-gray-300 hover:bg-gray-600">Editar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contenido principal -->
        <div class="flex flex-col flex-grow bg-white">
            <!-- Aquí va el contenido principal de la página -->
        </div>
    </div>