@extends('ganado.bovino.main')

@section('titulo', 'Registrar Toro')

@section('titulo-contenido', 'Registrar Toro')
@section('contenido')
<div class="p-2">
    <form action="{{route('toro.store')}}" method="POST">
        {{-- Valores ocultos --}}
        @csrf
        <input type="hidden" name="sexo" value="1">{{-- 1 -> macho --}}
        @include('ganado.bovino.base.crear')
        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="tipo_alimentacion" label="Tipo de alimentación: *" model-value="{{ old('tipo_alimentacion') }}"></flow-input>
       
            <flow-input type="number" name="tiempo_madurez" label="Tiempo de madurez del padre: *" model-value="{{ old('tiempo_madurez') }}"></flow-input>
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection