@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Terreno')

@section('titulo-contenido', 'Registrar Terreno')
@section('contenido')
<div class="p-2">
    <form action="{{route('terreno.update',['terreno' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        
        @include('agricultura.maiz.base.editar')
        
            
                    <div class="flex flex-row justify-between py-3 items-center">
                        <div class="w-1/4">
                            <x-bladewind.input 
                                name="ubicacion" 
                                label="Ubicacion: " 
                                value="{{$modelo->ubicacion}}" 
                                class="border-cyan-700"
                            />
                        </div>
            
                        <div class="flex flex-row justify-between py-3 items-center">
                            <div class="w-1/4">
                                <x-bladewind.input 
                                    type="numeric"
                                    name="hectareas" 
                                    label="Hectareas: "
                                    min="0" 
                                    value="{{$modelo->hectareas}}" 
                                    class="border-cyan-700"
                                />
                            </div>

                            <div class="flex flex-row justify-between py-3 items-center">
                                <div class="w-1/4">
                                    <x-bladewind.input 
                                        name="tipo suelo" 
                                        label="Tipo suelo: " 
                                        value="{{$modelo->tipo_suelo}}" 
                                        class="border-cyan-700"
                                    />
                                </div>

                                <div class="flex flex-row justify-between py-3 items-center">
                                    <div class="w-1/4">
                                        <x-bladewind.input 
                                            name="nivel_humedad" 
                                            label="nivel_humedad: "
                                            value="{{$modelo->nivel_humedad}}" 
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