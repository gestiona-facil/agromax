@extends('ganado.bovino.main')

@section('titulo', 'Editar Toro')

@section('titulo-contenido', 'Editar Toro')
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
    <div class="p-2">
    <form action="{{route('toro.update', ['toro' => $modelo->id ])}})}}" method="POST">
        @csrf
        @method('PUT')

        @include('ganado.bovino.base.editar')

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input  
                    name="tipo_alimentacion"  
                    label="Tipo de alimentacion: "  
                    value="{{ $modelo->tipo_alimentacion }}"  
                    class="border-cyan-700" 
                />
            </div>

        </div>
            <div class="my-4">
                <x-bladewind.button  
                    can_submit="true" 
                    class="bg-cyan-700">Actualizar</x-bladewind.button>
            </div>
        </form>
    </div>
</body>
@endsection
