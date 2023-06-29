@extends('ganado.bovino.main')

@section('titulo', 'Registrar Toro')

@section('titulo-contenido', 'Registrar Toro')
@section('contenido')
<div class="p-2">
    <form action="{{route('reproductor.update')}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        @include('ganado.bovino.base.editar')
        <div class="flex flex-row justify-between pt-2">
            <flow-input type="text" name="tipo_alimentación" label="Tipo de alimento: *" model-value="{{ old('tipo_alimento') }}"></flow-input>
        </div>
        <div class="flex flex-row justify-between pt-2">
            <flow-input type="number" name="Tiempo_madurez" label="Tiempo de madurez del padre: *" model-value="{{ old('Tiempo_madurez') }}"></flow-input>
        </div>

        <div class="pt-6">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection