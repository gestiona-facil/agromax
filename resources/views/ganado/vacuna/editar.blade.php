@extends('ganado.bovino.main')

@section('titulo', 'Editar Vacuna')

@section('titulo-contenido', 'Editar Vacuna')
@section('contenido')
<div class="p-2">
    <form action="{{route('vacuna.update', ['vacuna' => $modelo->id])}}" method="POST">
        @csrf
 
        <div class="flex flex-row justify-between py-3">
            
            <flow-input type="text" name="nombre" label="Nombre: *" model-value="{{ $modelo->nombre }}"></flow-input>
            
            <flow-input type="text" name="lote" label="Lote: *" model-value="{{ $modelo->lote }}"></flow-input>
            
            <flow-input type="date" name="fecha" label="Fecha: *" model-value="{{ $modelo->fecha }}"></flow-input>
            
        </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection
