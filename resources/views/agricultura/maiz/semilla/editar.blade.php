@extends('agricultura.maiz.main')

@section('titulo', 'Editar Semilla')
@section('titulo-contenido', 'Editar Semilla')

@section('contenido')
<div class="p-2">
    <form action="{{route('semilla.update', ['semilla' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}        
        <div class="flex flex-row justify-between py-3 items-center">

            <div class="w-1/3">
                <x-bladewind.input
                    label="Marca: "
                    name="marca"
                    required="true"
                    value="{{$modelo->marca}}"  
                    class="border-green-700"
                />
            </div>

            <div class="w-1/3">
                <x-bladewind.input
                    type="number"
                    label="Cantidad: "
                    name="cantidad"
                    required="true"
                    value="{{$modelo->cantidad}}"  
                    class="border-green-700"
                    />
            </div>
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-green-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection