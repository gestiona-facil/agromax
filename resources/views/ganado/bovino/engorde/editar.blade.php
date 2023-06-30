@extends('ganado.bovino.main')

@section('titulo', 'Registrar Engorde')

@section('titulo-contenido', 'Registrar Engorde')
@section('contenido')
<div class="p-2">
    <form action="{{route('engorde.update', ['engorde' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        <input type="hidden" name="sexo" value="0">{{-- 0 -> hembra --}}
       @include('ganado.bovino.base.editar', ['modelo' => $modelo->ganado])

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="tipo_alimento" label="Tipo de alimento: *" model-value="{{ $modelo->tipo_alimento }}"></flow-input>
        
            <flow-input type="number" name="cant_total_alimento" label="Cantidad total de alimento: *" model-value="{{ $modelo->cant_total_alimento }}"></flow-input>
       
            <flow-input type="number" name="duracion" label="Duración (en días): *" model-value="{{ $modelo->duracion }}"></flow-input>
        </div>
        <div class="flex flex-row justify-between py-3">
            <flow-input type="number" name="peso_inicial" label="Peso inicial: *" model-value="{{ $modelo->peso_inicial }}"></flow-input>
        
            <flow-input type="number" name="peso_final" label="Peso final: *" model-value="{{ $modelo->peso_final }}"></flow-input>
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection