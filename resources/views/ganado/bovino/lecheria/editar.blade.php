@extends('ganado.bovino.main')

@section('titulo', 'Editar Lecheria')

@section('titulo-contenido', 'Editar Lecheria')
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
<div class="p-2">
    <form action="{{route('lecheria.update', ['lecherium' => $modelo->id ])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="alias" 
                    label="Alias: " 
                    value="{{ $modelo->alias }}" 
                    class="border-cyan-700"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="number" 
                    name="cant_meta" 
                    label="Meta de producción: "
                    suffix="Litros / dia"
                    min="0" 
                    value="{{ $modelo->cant_meta }}" 
                    class="border-cyan-700"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo_alimento" 
                    label="Tipo de alimento: " 
                    value="{{ $modelo->tipo_alimentacion }}" 
                    class="border-cyan-700"
                />
            </div>

        </div>

        <div class="flex flex-row justify-between py-3 items-center">
            <x-bladewind.textarea 
            label="Observaciones" 
            name="observaciones" 
            value="{{ $modelo->observaciones }}"  
            class="border-cyan-700"
            />
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