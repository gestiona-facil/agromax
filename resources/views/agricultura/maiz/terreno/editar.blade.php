@extends('agricultura.maiz.main')

@section('titulo', 'Editar Terreno')

@section('titulo-contenido', 'Editar Datos de Terreno')
@section('contenido')

<body class="bg-cover bg-gradient-to-r from-green-400 to-amber-500 full-screen">
<div class="p-2">
    <form action="{{route('terreno.update', ['terreno' => $modelo->id])}}" method="POST">
        @csrf         
        @method('put')

        <div class="flex flex-row justify-between py-3 items-center">

            <div class="w-1/4">
                <x-bladewind.input 
                    type="number"
                    name="hectareas" 
                    label="Hectareas: "
                    min="0" 
                    value="{{ $modelo->hectareas }}" 
                    class="border-green-700"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    name="ubicacion" 
                    label="Ubicacion: " 
                    value="{{$modelo->ubicacion}}" 
                    class="border-green-700"
                    required="true"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    name="tipo suelo" 
                    label="Tipo suelo: " 
                    value="{{$modelo->tipo_suelo}}" 
                    class="border-green-700"
                />
            </div>
        </div>

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input 
                    name="nivel_humedad" 
                    label="Nivel de humedad: "
                    value="{{$modelo->nivel_humedad}}" 
                    class="border-green-700"
                />
            </div>
        </div>

        <div class="my-4">
            <x-bladewind.button 
                can_submit="true"
                class="bg-green-700">Actualizar</x-bladewind.button>
        </div>
    </form>
</div>
</body>
@endsection