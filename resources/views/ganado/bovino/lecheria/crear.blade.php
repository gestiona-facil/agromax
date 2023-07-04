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
                    name="alias" 
                    label="Alias: " 
                    value="{{old('alias')}}" 
                    class="border-cyan-700"
                />
            </div>

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
                        name="cant_meta" 
                        label="Cantidad meta: "
                        min="0" 
                        value="{{old('cant_meta')}}" 
                        class="border-cyan-700"
                    />
                </div>
                
                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-1/4">
                    <x-bladewind-textarea
                        label="Observaciones"
                        name="observaciones: "
                        value="{{old('observaciones')}}"  />
                        class="border-cyan-700"

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection