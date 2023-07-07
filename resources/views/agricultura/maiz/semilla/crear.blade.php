@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Semilla')
@section('titulo-contenido', 'Registrar Semilla')

@section('contenido')
<div class="p-2">
    <form action="{{route('semilla.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}        
        <div class="flex flex-row justify-between py-3 items-center">

            <div class="w-1/3">
                <x-bladewind.input
                    label="Marca: "
                    name="marca"
                    required="true"
                    value="{{old('marca')}}"  
                    class="border-green-700"
                />
            </div>

            <div class="w-1/3">
                <x-bladewind.input
                    type="number"
                    label="Cantidad: "
                    name="cantidad"
                    required="true"
                    value="{{old('marca')}}"  
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