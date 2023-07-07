@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Siembra ')

@section('titulo-contenido', 'Registrar Siembra')
@section('contenido')
<div class="p-2">
    <form action="{{route('siembra.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/3">
                <x-bladewind.select
                    label="Semilla: "
                    :data="$semillas"
                    name="semilla"
                    required="true"
                    class="border-green-700"
                    empty_label="No hay registros"
                    none_selected_label="ninguno"
                />
            </div>
            
            <div class="w-1/3">
                <x-bladewind.select
                    label="Terreno: "
                    :data="$terrenos"
                    name="terreno"
                    required="true" 
                    class="border-green-700"
                    empty_label="No hay registros"
                    none_selected_label="ninguno"
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
                    label="Cosecha esperada: "
                    name="cant_esperada"
                    value="{{old('cant_esperada')}}"  
                    class="border-green-700"
                    suffix="Kg"
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
