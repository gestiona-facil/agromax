@extends('agricultura.maiz.main')

@section('titulo', 'Editar Fertilizacion')

@section('titulo-contenido', 'Editar Fertilizacion')
@section('contenido')
<div class="p-2">
    <form action="{{route('fertilizacion.update',['fertilizacion' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}

        @include('agricultura.maiz.base.editar')

        @csrf
        
            
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="nombre" 
                    label="Nombre: " 
                    value="{{ $modelo->nombre }}" 
                    class="border-cyan-700"
                />
            </div>

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo" 
                    label="Tipo : " 
                    value="{{ $modelo->tipo }}" 
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
                        value="{{$modelo->cantidad}}" 
                        class="border-cyan-700"
                    />
                </div>

                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-40">
                        <x-bladewind.datepicker 
                            name="fecha"
                            placeholder="Fecha"
                            value="{{$modelo->fecha}}" 
                            class="border-cyan-700"
                        />
                    </div>

                    <div class="flex flex-row justify-between py-3 items-center">
                        <div class="w-1/4">
                            <x-bladewind.input 
                                name="metodo_aplicacion" 
                                label="Metodo de aplicacion: "
                                value="{{$modelo->metodo_aplicacion}}" 
                                class="border-cyan-700"
                            />
                        </div>
                
                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-1/4">
                    <x-bladewind.textarea
                        label="Observaciones"
                        name="observaciones: "
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