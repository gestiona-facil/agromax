@extends('ganado.bovino.main')

@section('titulo', 'Registrar Toro')

@section('titulo-contenido', 'Registrar Toro')
@section('contenido')
<div class="p-2 bg-gradient-to-r from-gray-300 to-gray-800 text-center">
    <form action="{{route('reproductor.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        @include('ganado.bovino.base.crear')
        <div class="flex flex-row justify-between pt-2">
            <flow-input type="text" name="tipo_alimentación" label="Tipo de alimento: *" model-value="{{ old('tipo_alimento') }}" class="bg-white text-black"></flow-input>
        </div>
        <div class="flex flex-row justify-between pt-2">
            <flow-input type="number" name="Tiempo_madurez" label="Tiempo de madurez del padre: *" model-value="{{ old('Tiempo_madurez') }}" class="bg-white text-black"></flow-input>
        </div>

        <div class="pt-6">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection