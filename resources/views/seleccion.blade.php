@extends('main')

@section('app')

{{-- <html lang="en">
<head> --}}
@section('pre-links')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@endsection
    {{-- <title>Selecciona tu Producción</title> --}}
@section('titulo', 'Selecciona tu producción')

{{-- </head> --}}
{{-- <body> --}}
@section('app')
  <div class="flex h-screen">
    <!-- Seccion Vegetal -->
    <div class="w-1/2 bg-cover bg-center relative flex items-center justify-center" style="background-image: url('../img/fondo4.jpg')">
      <div class="absolute inset-0 bg-black opacity-50"></div>
      <div class="text-center z-10">
        <h2 class="text-xl font-extrabold text-white border-rounded-md italic mb-4">Producción Vegetal (Siembra)</h2>
        {{-- <button class="bg-gradient-to-r from-green-700 to-amber-700 font-bold hover:bg-green-700 text-white rounded px-4 py-2 transition-colors duration-300"><a href="inicio">Maíz</a></button> --}}
        <button class="bg-gradient-to-r from-green-700 to-amber-700 font-bold hover:bg-green-700 text-white rounded px-4 py-2 transition-colors duration-300"><a href="{{ route('agricultura.maiz.inicio') }}">Maíz</a></button>
      </div>
    </div>
    <!-- Seccion Animal -->
    <div class="w-1/2 bg-cover bg-center relative flex items-center justify-center" style="background-image: url('../img/fondo3.jpg')">
      <div class="absolute inset-0 bg-black opacity-50 "></div>
      <div class="text-center z-10">
        <h2 class="text-xl font-extrabold text-white italic border-solid mb-4">Producción Animal (Ganadería)</h2>
        {{-- <button class="bg-gradient-to-r from-cyan-700 to-amber-700 font-bold hover:blue-300 text-white rounded px-4 py-2 transition-colors duration-300" ><a href="inicio2">Bovino </a></button> --}}
        <button class="bg-gradient-to-r from-cyan-700 to-amber-700 font-bold hover:blue-300 text-white rounded px-4 py-2 transition-colors duration-300" ><a href="{{ route('ganado.bovino.inicio') }}">Bovino </a></button>
      </div>
  
    </div>
  </div>
@endsection
{{-- </body>
</html> --}}