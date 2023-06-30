@extends('ganado.bovino.main')

@section('titulo', 'Editar Lecheria')

@section('titulo-contenido', 'Editar Lecheria')
@section('contenido')
<div class="p-2">
    <form action="{{route('lecheria.update', ['lecherium' => $modelo->id ])}}" method="POST">
        @csrf

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="alias" label="Alias: *" model-value="{{ $modelo->alias }}"></flow-input>
            
            <flow-input type="text" name="tipo_alimento" label="Tipo de alimento: *" model-value="{{ $modelo->tipo_alimento }}"></flow-input>
            
            <flow-input type="number" name="cant_meta" min="0" label="Cantidad meta: *" model-value="{{ $modelo->cant_meta }}"></flow-input>
        </div>

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="observaciones" label="Observaciones: " model-value="{{ $modelo->observaciones }}"></flow-input>
        </div>

        <div class="my-4">
            <flow-button type="submit">Guardar</flow-button>
        </div>
    </form>
</div>
@endsection
