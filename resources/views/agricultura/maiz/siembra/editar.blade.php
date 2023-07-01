@extends('agricultura.maiz.main')

@section('titulo', 'Editar Siembra ')

@section('titulo-contenido', 'Registrar Editar')
@section('contenido')
<div class="p-2">
    <form action="{{route('siembra.update',['siembra' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        {{-- Valores ocultos --}}
        
        @include('agricultura.maiz.base.editar')

            <div class="flex flex-row justify-between py-3 items-center">
                <div class="w-40">
                    <x-bladewind.datepicker 
                        name="fecha"
                        placeholder="Fecha "
                        value="{{$modelo->fecha}}" 
                        class="border-cyan-700"
                    />
                </div>
                
                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-1/4">
                    <x-bladewind-input
                        type="numeric"
                        label="Cantidad esperada"
                        name="cantidad esperada: "
                        value="{{$modelo->cant_esperada}}"  
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