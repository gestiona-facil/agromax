@extends('ganado.bovino.main')

@section('titulo', 'Registrar Toro')

@section('titulo-contenido', 'Registrar Toro')
@section('contenido')
<div class="p-2">
    <form action="{{route('toro.store')}}" method="POST">
        @csrf
        {{-- campos ocultos --}}
        <input type="hidden" name="sexo" value="1" /> {{-- 1 => toro --}}
        <input type="hidden" name="tiempo_madurez" value="1080" /> {{-- cantidad => dias --}}

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
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-cyan-700">Registrar</x-bladewind.button>
        </div>
    </form>
</div>
@endsection