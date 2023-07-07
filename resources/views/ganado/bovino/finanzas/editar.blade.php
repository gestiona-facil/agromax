@extends('ganado.bovino.main')

@section('titulo', 'Registrar Finanzas ')

@section('titulo-contenido', 'Registrar Finanzas')
@section('contenido')
<div class="p-2">
    <form action="{{route('finanza.update, ['finanza' => $modelo->id] ')}}" method="POST">
        @csrf
        @method('put')
        <div class="w-1/4">
            <x-bladewind.input 
                name="concepto" 
                label="Concepto:"
                value="{{$modelo->concepto}}"  
                class="border-green-700"
            />
        </div>

        {{-- Valores ocultos --}}
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/3">
                <x-bladewind.select
                    label="Naturaleza: "
                    :data="$naturaleza"
                    name="naturaleza"
                    required="true"
                    class="border-green-700"
                    empty_label="No hay registros"
                    none_selected_label="ninguno"
                />
            </div>

            <div class="flex flex-row justify-between py-3 items-center">
                <div class="w-1/4">
                    <x-bladewind.input
                        type="number"
                        label="Monto: "
                        name="monto"
                        value="{{$modelo->monto}}" 
                        class="border-green-700"
                    />
                </div>

                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-1/4">
                        <x-bladewind.input
                            type="date"
                            label="Fecha:"
                            name="fecha"
                            value="{{$modelo->fecha}}" 
                            class="border-green-700"
                            required="true"
                        />
                    </div>

                    <div class="flex flex-row justify-between items-center py-3">
                        <x-bladewind.textarea
                            label="Observaciones: " 
                            name="observaciones"
                            value="{{$modelo->observaciones}}" 
                            class="border-cyan-700"
                        />
                    </div>

                    <div class="my-4">
                        <x-bladewind.button 
                            can_submit="true"
                            class="bg-green-700">Actualizar</x-bladewind.button>
                    </div>
                </form>
            </div>
            @endsection