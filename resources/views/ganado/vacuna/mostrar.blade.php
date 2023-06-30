@extends('ganado.bovino.main')

@section('titulo', 'Vacuna')

@section('titulo-contenido', 'Datos de Vacuna: '.$modelo->nombre)

@section('contenido')
<div>
    <div class="p-b-2 pt-4 px-4">
        {{-- boton editar --}}
        <flow-button size="xs"><a href="{{ route('vacuna.edit', ['vacuna' => $modelo->id])}}">Editar</a></flow-button>
        {{-- boton exportar --}}
    </div>
    <div class="flex flex-row">
        <div class="px-2 w-4/5">
            <h2 class="text-2xl border-b py-3 indent-3">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Nombre </span><flow-badge>{{$modelo->nombre}}</flow-badge>
                        </p>
                    </div>
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Lote: </span><flow-badge>{{$modelo->lote}}</flow-badge>
                        </p>
                    </div>
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">fecha: </span><flow-badge>{{$modelo->fecha}}</flow-badge>
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