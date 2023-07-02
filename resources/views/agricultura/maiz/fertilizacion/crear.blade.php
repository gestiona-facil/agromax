@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Fertilizacion')

@section('titulo-contenido', 'Registrar Fertilizacion')
@section('contenido')
<div class="p-2">
    <form action="{{route('fertilizacion.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}

        @include('agricultura.maiz.base.crear')

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" label="Nombre: *" model-value="{{ old('nombre') }}"></flow-input>
            </div>

        <div class="flex flex-row justify-between py-3">
            <flow-input type="text" label="Tipo: *" model-value="{{ old('tipo') }}"></flow-input>
            </div>

        <div class="flex flex-row justify-between py-3">
                <flow-input type="number" label="Cantidad: *" model-value="{{ old('cantidad') }}"></flow-input>
                </div>
        
        <div class="flex flex-row justify-between py-3">
                <flow-input type="date" label="Fecha: *" model-value="{{ old('fecha') }}"></flow-input>
                </div>

        <div class="flex flex-row justify-between py-3">
                <flow-input type="text" label="Metodo de aplicacion: *" model-value="{{ old('metodo_aplicacion') }}"></flow-input>
                </div>

        <div class="flex flex-row justify-between py-3">
                <flow-input type="text" label=" Observaciones: *" model-value="{{ old('observaciones') }}"></flow-input>
                    </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
                    </div>
                </form>
            </div>
            @endsection