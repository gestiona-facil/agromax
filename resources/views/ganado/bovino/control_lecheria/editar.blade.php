@extends('ganado.bovino.main')

@section('titulo', 'Editar Control de Leche')

@section('titulo-contenido', 'Editar registro de leche')
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
    <div class="p-2">
    <form action="{{route('bovino.control-lecheria.update', ['controlLecheria' => $modelo->id])}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <input type="hidden" name="vaca" value="{{ $modelo->madre->id }}">

        <div class="flex flex-row justify-between items-center py-3">

            <div class="w-1/4">
                <x-bladewind.input
                    label="Vaca:"
                    name="ignore"
                    value="{{ $modelo->madre->ganado->identificacion }}"
                    disabled
                    class="bg-gray-100 cursor-not-allowed"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="number"
                    label="Cantidad de Leche:"
                    name="cant_recolectada"
                    required="true"
                    min="0" 
                    suffix="Litros"
                    value="{{ $modelo->cant_recolectada }}"
                    class="border-cyan-700"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="date"
                    label="Fecha"
                    name="fecha"
                    required="true" 
                    value="{{ $modelo->fecha }}"
                    class="border-cyan-700"
                />
            </div>
        </div>
        <div class="flex flex-row justify-between items-center py-3">
            <x-bladewind.textarea
                label="Observaciones: " 
                value="{{ $modelo->observaciones }}"
                class="border-cyan-700"
            />
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Guardar</x-bladewind.button>
        </div>
    </form>
    </div>
</body>
@endsection
