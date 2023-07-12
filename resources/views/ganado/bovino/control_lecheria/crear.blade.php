@extends('ganado.bovino.main')

@section('titulo', 'Agregar Control de Leche')

@section('titulo-contenido', 'Agregar registro sobre Leche')
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
    <div class="p-2">
    <form action="{{route('bovino.control-lecheria.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <input type="hidden" name="vaca" value="{{ $madre->id }}">

        <div class="flex flex-row justify-between items-center py-3">

            <div class="w-1/4">
                <x-bladewind.input
                    label="Vaca:"
                    name="ignore"
                    value="{{ $madre->ganado->identificacion }}"
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
                    value="{{ old('cant_recolectada') }}"
                    class="border-cyan-700"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="date"
                    label="Fecha"
                    name="fecha"
                    required="true" 
                    value="{{ date('Y-m-d') }}"
                    class="border-cyan-700"
                />
            </div>
        </div>
        <div class="flex flex-row justify-between items-center py-3">
            <x-bladewind.textarea
                label="Observaciones: " 
                value="{{ old('observaciones') }}"
                class="border-cyan-700"
            />
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Agregar</x-bladewind.button>
        </div>
    </form>
    </div>
</body>
@endsection
