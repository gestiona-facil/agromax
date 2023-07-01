@extends('ganado.bovino.main')

@section('titulo', 'Registrar Toro')

@section('titulo-contenido', 'Registrar Toro')
@section('contenido')
<div class="p-2">
    <form action="{{route('reproductor.store')}}" method="POST">
        @csrf
        
        @include('ganado.bovino.base.crear')

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo_alimentacion" 
                    label="Tipo de alimentacion: " 
                    value="{{old('tipo_alimentacion')}}" 
                    class="border-cyan-700"
                />
            </div>

            <div class="flex flex-row justify-between py-3 items-center">
                <div class="w-1/4">
                    <x-bladewind.input 
                        type="numeric"
                        name="alias" 
                        label="Tiempo de Madurez: " 
                        value="{{old('tiempo_madurez')}}" 
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