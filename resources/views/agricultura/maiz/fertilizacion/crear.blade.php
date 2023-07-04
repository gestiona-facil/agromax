@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Fertilizacion')

@section('titulo-contenido', 'Registrar Fertilizacion')
@section('contenido')
<div class="p-2">
    <form action="{{route('fertilizacion.store')}}" method="POST">
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
                                <div class="w-40">
                                    <x-bladewind.datepicker 
                                        name="fecha"
                                        placeholder="Fecha"
                                        value="{{old('fecha')}}" 
                                        class="border-cyan-700"
                                    />
                                </div>

                                <div class="flex flex-row justify-between py-3 items-center">
                                    <div class="w-1/4">
                                        <x-bladewind.input 
                                            name="metodo_aplicacion" 
                                            label="Metodo de aplicacion: "
                                            value="{{old('metodo_aplicacion')}}" 
                                            class="border-cyan-700"
                                        />
                                    </div>
                            
                            <div class="flex flex-row justify-between py-3 items-center">
                                <div class="w-1/4">
                                <x-bladewind-textarea
                                    label="Observaciones"
                                    name="observaciones: "
                                    value="{{old('observaciones')}}" 
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