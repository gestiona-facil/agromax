@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Terreno')

@section('titulo-contenido', 'Registrar Terreno')
@section('contenido')
<div class="p-2">
    <form action="{{route('terreno.store')}}" method="POST">
        @csrf
        
            
                    <div class="flex flex-row justify-between py-3 items-center">
                        <div class="w-1/4">
                            <x-bladewind.input 
                                name="ubicacion" 
                                label="Ubicacion: " 
                                value="{{old('ubicacion')}}" 
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
                                    value="{{old('hectareas')}}" 
                                    class="border-cyan-700"
                                />
                            </div>

                            <div class="flex flex-row justify-between py-3 items-center">
                                <div class="w-1/4">
                                    <x-bladewind.input 
                                        name="tipo suelo" 
                                        label="Tipo suelo: " 
                                        value="{{old('tipo_suelo')}}" 
                                        class="border-cyan-700"
                                    />
                                </div>

                                <div class="flex flex-row justify-between py-3 items-center">
                                    <div class="w-1/4">
                                        <x-bladewind.input 
                                            name="nivel_humedad" 
                                            label="nivel_humedad: "
                                            value="{{old('nivel_humedad')}}" 
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