@extends('agricultura.maiz.main')

@section('titulo', 'Registrar Riego')

@section('titulo-contenido', 'Registrar Riego')
@section('contenido')

<body class="bg-cover bg-gradient-to-r from-green-400 to-amber-500 full-screen">
<div class="p-2">
    <form action="{{route('riego.update', ['riego' => $modelo->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.select 
                    name="siembra" 
                    label="Siembra en: " 
                    :data="$siembras"
                    class="border-green-700"
                    empty_label="No hay registros"
                    none_selected_label="ninguno"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    type="number"
                    name="cantidad" 
                    label="Cantidad: "
                    min="0" 
                    value="{{$modelo->cantidad}}" 
                    class="border-green-700"
                />
            </div>
        </div>

        <div class="flex flex-row justify-between py-3 items-center">
            <div class="w-1/4">
                <x-bladewind.input
                    type="number"
                    label="Frecuencia: "
                    name="frecuencia"
                    value="{{$modelo->frecuencia}}"  
                    class="border-green-700"
                />
            </div>

            <div class="w-1/4">
                <x-bladewind.input 
                    name="metodo" 
                    label="Metodo: "
                    value="{{$modelo->metodo}}" 
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