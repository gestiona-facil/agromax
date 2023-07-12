<header class="bg-gradient-to-r from-green-700 to-amber-700 text-white p-4 flex justify-between items-center">
    <div class="flex items-center">
      <img src="{{ asset('img/logo.png')}}" class="h-14">
    </div>
  
    <nav class="space-x-4">
      <a href="{{ route('siembra.create')}}" class="text-gray-300 hover:text-white">Siembra</a>
      <a href="{{ route('terreno.create')}}" class="text-gray-300 hover:text-white">Terreno</a>
      <a href="{{ route('fertilizacion.create')}}" class="text-gray-300 hover:text-white">Fertilizacion</a>
      <a href="{{ route('semilla.create')}}" class="text-gray-300 hover:text-white">Semilla</a>
     <a href="#" class="text-black-300 border:bg-cyan-100 hover:text-white font-bold text-xl"></a>
    </nav>
  
    <x-bladewind.button class="bg-gradient-to-r from-green-600 to-cyan-600 hover:bg-cyan-200 text-white px-4 py-2 rounded">Cerrar Sesión</x-bladewind.button>
</header>