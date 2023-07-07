@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Cosecha ')

@section('titulo-contenido', 'Registrar Cosecha')
@section('contenido')
<div class="p-2">
    <form action="{{route('cosecha.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/3">
                <x-bladewind.select
                    label="Siembra en: "
                    :data="$siembras"
                    name="siembra"
                    class="border-green-700"
                    empty_label="No hay registros"
                    none_selected_label="ninguno"
                    required="true"
                />
            </div>
        </div>
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/3">
                <x-bladewind.input
                    type="date"
                    label="Fecha: "
                    name="fecha"
                    required="true"
                    value="{{old('fecha')}}" 
                    class="border-green-700"
                />
            </div>
            
            <div class="w-1/3">
                <x-bladewind.input
                    type="number"
                    label="Cantidad cosechada: "
                    name="cantidad"
                    value="{{old('cant_esperada')}}"  
                    class="border-green-700"
                    suffix="Kg"
                    required="true"
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
