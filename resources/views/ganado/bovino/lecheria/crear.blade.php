@extends('ganado.bovino.main')

@section('titulo', 'Registrar Lecheria')

@section('titulo-contenido', 'Registrar Lecheria')
@section('contenido')
<div class="p-2">
    <form action="{{route('lecheria.store')}}" method="POST">
        @csrf

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="alias" label="Alias: *" model-value="{{old('alias')}}"></flow-input>
            
            <flow-input type="text" name="tipo_alimento" label="Tipo de alimento: *" model-value="{{old('tipo_alimento')}}"></flow-input>
            
            <flow-input type="number" name="cant_meta" min="0" label="Cantidad meta: *" model-value="{{old('cant_meta')}}"></flow-input>
        </div>

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" name="observaciones" label="Observaciones: " model-value="{{ old('observaciones') }}"></flow-input>
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection
