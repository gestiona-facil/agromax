<header class="bg-gradient-to-r from-cyan-700 to-amber-700 text-white p-4 flex justify-between items-center">
  <div class="flex items-center">
    <img src="{{ asset('img/logo.png')}}" class="h-14">
  </div>


  <nav class="space-x-4">
    <a href="{{route('vaca.create')}}" class="text-gray-300 hover:text-white font-bold">Vaca</a>
    <a href="{{ route('engorde.index')}}" class="text-gray-300 hover:text-white font-bold ">engorde</a>
    <a href="{{ route('cria.create')}}" class="text-gray-300 hover:text-white font-bold">Levante</a>
    <a href="{{ route('lecheria.create')}}" class="text-gray-300 hover:text-white font-bold">Ordeño</a>
  </nav>

    <x-bladewind.button class="bg-gradient-to-r from-green-600 to-cyan-600 hover:bg-cyan-200 text-white px-4 py-2 rounded">Cerrar Sesión</x-bladewind.button>
</header>
