@extends('ganado.bovino.main')

@section('titulo', 'Registrar Engorde')

@section('titulo-contenido', 'Registrar Engorde')
@section('contenido')
<div class="p-2">
    <form action="{{route('engorde.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <input type="hidden" name="sexo" value="1">{{-- 1 -> macho --}}
        @include('ganado.bovino.base.crear')
        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="tipo_alimento" label="Tipo de alimento: *" model-value="{{ old('tipo_alimento') }}"></flow-input>
       
            <flow-input type="number" name="cant_total_alimento" label="Cantidad total de alimento: *" model-value="{{ old('cant_total_alimento') }}"></flow-input>
       
            <flow-input type="number" name="duracion" label="Duración (en días): *" model-value="{{ old('duracion') }}"></flow-input>
        </div>
        <div class="flex flex-row justify-between py-3">
            <flow-input type="number" min="0" name="peso_inicial" label="Peso inicial: *" model-value="{{ old('peso_inicial') }}"></flow-input>
       
            <flow-input type="number" min="0" name="peso_final" label="Peso final: *" model-value="{{ old('peso_final') }}"></flow-input>
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection