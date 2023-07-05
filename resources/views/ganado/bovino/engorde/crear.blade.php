@extends('ganado.bovino.main')

@section('titulo', 'Registrar Ordeño')

@section('titulo-contenido', 'Registrar Ordeño')
@section('contenido')
<div class="p-2">
    <form action="{{route('lecheria.store')}}" method="POST">
        @csrf
        
        @include('ganado.bovino.base.crear')

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo_alimento" 
                    label="Tipo de alimento: " 
                    value="{{old('tipo_alimentacion')}}" 
                    class="border-cyan-700"
                />
            </div>

            <div class="flex flex-row justify-between py-3 items-center">
                <div class="w-1/4">
                    <x-bladewind.input 
                        numeric="true"
                        name="cant_total_alimento" 
                        min="0"
                        label="Cantidad Total de alimento: "
                        value="{{old('cant_total_alimento')}}" 
                        class="border-cyan-700"
                    />
                </div>

                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-1/4">
                        <x-bladewind.input 
                            numeric="true"
                            name="duracion (En dias)" 
                            label="Duracion: " 
                            value="{{old('duracion')}}" 
                            class="border-cyan-700"
                        />
                    </div>
                
                    <div class="flex flex-row justify-between py-3 items-center">
                        <div class="w-1/4">
                            <x-bladewind.input 
                                name="cant_total_alimento" 
                                min="0"
                                label="Cantidad meta: "
                                value="{{old('cant_meta')}}" 
                                class="border-cyan-700"
                            />
                        </div>

                        <div class="flex flex-row justify-between py-3 items-center">
                            <div class="w-1/4">
                                <x-bladewind.input 
                                    numeric="true"
                                    name="peso_inicial" 
                                    min="0"
                                    label="Peso inicial: "
                                    value="{{old('peso_inicial')}}" 
                                    class="border-cyan-700"
                                />
                            </div>

                            <div class="flex flex-row justify-between py-3 items-center">
                                <div class="w-1/4">
                                    <x-bladewind.input 
                                        numeric="true"
                                        name="peso_final" 
                                        min="0"
                                        label="Peso final: "
                                        value="{{old('peso_final')}}" 
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