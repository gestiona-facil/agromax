@extends('ganado.bovino.main')

@section('titulo', 'Registrar Vacuna')

@section('titulo-contenido', 'Registrar Vacuna')
@section('contenido')
<div class="p-2">
    <form action="{{route('vacuna.store')}}" method="POST">
        @csrf
 
        <div class="flex flex-row justify-between py-3">
            
            <flow-input type="text" name="nombre" label="Nombre: *" model-value="{{old('nombre')}}"></flow-input>
            
            <flow-input type="text" name="lote" label="Lote: *" model-value="{{old('lote')}}"></flow-input>
            
            <flow-input type="date" name="fecha" label="Fecha: *" model-value="{{old('fecha')}}"></flow-input>
            
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection
