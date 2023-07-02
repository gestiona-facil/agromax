@extends('agricultura.maiz.main')

@section('titulo', 'Editar Cosecha')

@section('titulo-contenido', 'Editar Cosecha')
@section('contenido')
<div class="p-2">
    <form action="{{route('cosecha.update')}}" method="POST">
        @csrf
        @method('put')

        @include('agricultura.maiz.base.editar')

        <div class="flex flex-row justify-between py-3">
        <flow-input type="date" label="Fecha de cosecha: *" model-value="{{ old('fecha') }}"></flow-input>
        </div>

        <div class="flex flex-row justify-between py-3">
        <flow-input type="number" name="cantidad" label="Cantidad: *" model-value="{{ old('cantidad') }}"></flow-input>
    </div>

        <div class="my-4">
            <flow-button type="submit">Registrar</flow-button>
        </div>
    </form>
</div>
@endsection
