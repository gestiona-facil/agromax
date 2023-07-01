@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Siembra ')

@section('titulo-contenido', 'Registrar Siembra')
@section('contenido')
<div class="p-2">
    <form action="{{route('siembra.store')}}" method="POST">
        @csrf
        {{-- Valores ocultos --}}
        
        @include('agricultura.maiz.base.crear')
                
                <div class="flex flex-row justify-between py-3 items-center">
                    <div class="w-1/4">
                    <x-bladewind-input
                        label="Marca"
                        name="marca: "
                        value="{{old('marca')}}"  
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