@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Cosecha ')

@section('titulo-contenido', 'Registrar Cosecha')
@section('contenido')
<div class="p-2">
    <form action="{{route('cosecha.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        
        @include('agricultura.maiz.base.crear')

            <div class="flex flex-row justify-between py-3 items-center">
                <div class="w-40">
                    <x-bladewind.datepicker 
                        name="fecha"
                        placeholder="Fecha de Cosecha"
                        value="{{old('fecha')}}" 
                        class="border-cyan-700"
                    />
                </div>
                
                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-1/4">
                    <x-bladewind-input
                        type="numeric"
                        label="Cantidad"
                        name="cantidad: "
                        value="{{old('cantidad')}}"  
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
