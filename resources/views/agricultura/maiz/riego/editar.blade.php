@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Riego')

@section('titulo-contenido', 'Registrar Riego')
@section('contenido')
<div class="p-2">
    <form action="{{route('riego.update', ['riego' => $modelo->id])}}" method="POST">
@csrf
@method('put')
        
@include('agricultura.maiz.base.editar')
            
<div class="flex flex-row justify-between py-3 items-center">
    <div class="w-1/4">
        <x-bladewind.input 
            name="nombre" 
            label="Nombre: " 
            value="{{modelo->nombre}}" 
            class="border-cyan-700"
        />
    </div>

<div class="flex flex-row justify-between py-3 items-center">
    <div class="w-1/4">
        <x-bladewind.input 
            name="tipo" 
            label="Tipo : " 
            value="{{modelo->tipo}}" 
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
                value="{{modelo->cantidad}}" 
                class="border-cyan-700"
            />
        </div>

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
            <x-bladewind-input
                label="Frecuencia"
                name="frecuencia: "
                value="{{modelo->frecuencia}}"  
                class="border-cyan-700"
                />
            </div>

        <div class="flex flex-row justify-between py-3 items-center">
                <div class="w-1/4">
                    <x-bladewind.input 
                        name="metodo" 
                        label="Metodo: "
                        value="{{modelo->metodo}}" 
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