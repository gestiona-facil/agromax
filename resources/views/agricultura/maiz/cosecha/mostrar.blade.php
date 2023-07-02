@extends('agricultura.maiz.main')

@section('titulo', 'Cosecha')

@section('titulo-contenido', 'Datos de Cosecha: '.$modelo->agricultura->identificacion)

@section('contenido')
<div>
    <div class="p-b-2 pt-4 px-4">
        {{-- boton editar --}}
        <flow-button size="xs"><a href="{{ route('cosecha.edit', ['cosecha' => $modelo->id])}}">Editar</a></flow-button>
        {{-- boton exportar --}}
    </div>
    <div class="flex flex-row">
        <div class="px-2 w-4/5">
            <h2 class="text-2xl border-b py-3 indent-3">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Identificación: </span><flow-badge>{{$modelo->cosecha->identificacion}}</flow-badge>
                        </p>
                    </div>
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Fecha: </span><flow-badge>{{$modelo->agricultura->fecha}}</flow-badge>
                        </p>
                    </div>
                </div>
                <div class="flex flex-row items-center py-3 justify-between">
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Cantidad:</span><flow-badge>{{$modelo->ganado->cantidad}}</flow-badge>
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="text-xl border-b py-3 indent-3">Información Secundaria</h2>
            <div class="p-3">
                <div>
                    <p>
                        <span>info</span><span></span>
                    </p>
                </div>
            </div>
        </div>
        <div  class="border-gray-200 border-l-2 px-2">
            <h2 class="text-xl border-b py-3 indent-3">Información Adicional</h2>
        </div>
    </div>
</div>
@endsection