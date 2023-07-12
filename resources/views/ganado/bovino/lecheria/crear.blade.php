@extends('ganado.bovino.main')

@section('titulo', 'Registrar Lecheria')

@section('titulo-contenido', 'Registrar Lecheria')
@section('contenido')
<body class="bg-gradient-to-r from-cyan-500 to-amber-500">
<div class="p-2">
    <form action="{{route('lecheria.store')}}" method="POST">
        @csrf
        
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="alias" 
                    label="Alias: " 
                    value="{{old('alias')}}" 
                    class="border-cyan-700"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input
                    type="number" 
                    name="cant_meta" 
                    label="Meta de producción: "
                    suffix="Litros / dia"
                    min="0" 
                    value="{{old('cant_meta')}}" 
                    class="border-cyan-700"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo_alimento" 
                    label="Tipo de alimento: " 
                    value="{{old('tipo_alimentacion')}}" 
                    class="border-cyan-700"
                />
            </div>

        </div>
                
        <div class="py-3">
            <x-bladewind.textarea
                label="Observaciones:"
                name="observaciones"
                value="{{old('observaciones')}}"
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
</body>
@endsection