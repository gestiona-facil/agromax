@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Riego')

@section('titulo-contenido', 'Registrar Riego')
@section('contenido')
<div class="p-2">
    <form action="{{route('riego.store')}}" method="POST">
@csrf
        
@include('agricultura.maiz.base.crear')
 
<div class="flex flex-row justify-between py-3 items-center">
    <div class="w-1/4">
        <x-bladewind.input 
            name="nombre" 
            label="Nombre: " 
            value="{{old('nombre')}}" 
            class="border-cyan-700"
        />
    </div>

<div class="flex flex-row justify-between py-3 items-center">
    <div class="w-1/4">
        <x-bladewind.input 
            name="tipo" 
            label="Tipo : " 
            value="{{old('tipo')}}" 
            class="border-cyan-700"
        />
    </div>

    <div class="flex flex-row justify-between py-3 items-center">
        <div class="w-1/4">
            <x-bladewind.input 
                type="numeric"
                name="cantidad" 
                label="Cantidad: "
                min="0" 
                value="{{old('cantidad')}}" 
                class="border-cyan-700"
            />
        </div>

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
            <x-bladewind-input
                label="Frecuencia"
                name="frecuencia: "
                value="{{old('frecuencia')}}"  
                class="border-cyan-700"
                />
            </div>

        <div class="flex flex-row justify-between py-3 items-center">
                <div class="w-1/4">
                    <x-bladewind.input 
                        name="metodo" 
                        label="Metodo: "
                        value="{{old('metodo')}}" 
                        class="border-cyan-700"
                    />
                </div>

<div class="my-4">
    <x-bladewind.button 
        can_submit="true"
        class="bg-cyan-700">Registrar</x-bladewind.button>
</div>
</form>
</div>
@endsection