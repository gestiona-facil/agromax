@extends('ganado.bovino.main')

@section('titulo', 'Vaca')

@section('titulo-contenido', 'Datos de Vaca: '.$modelo->ganado->identificacion)

@section('contenido')
<div>
    <div>
        {{-- boton editar --}}
        {{-- boton exportar --}}
    </div>
    <div class="flex flex-row">
        <div class="px-2 w-4/5">
            <h2 class="text-2xl border-b py-3 indent-3">Información Principal</h2>
            <div class="p-3">
                <div class="flex flex-row items-center py-3 justify-between">
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Identificación: </span><flow-badge>{{$modelo->ganado->identificacion}}</flow-badge>
                        </p>
                    </div>
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Alias: </span><flow-badge>{{$modelo->alias}}</flow-badge>
                        </p>
                    </div>
                </div>
                <div class="flex flex-row items-center py-3 justify-between">
                    <div>
                        <p class="flex text-xl">
                            <span class="px-2">Fecha de nacimiento:</span><flow-badge>{{$modelo->ganado->fecha_nacimiento}}</flow-badge>
                        </p>
                    </div>
                    @if($modelo->gestando)
                    <div>
                        <h3><span>Vaca preñada</span> desde <span>{{$modelo->fecha_inicio_gestacion}}</span></h3>
                        {{-- TODO: incluir fecha aproximada de parto --}}
                    </div>
                    @endif
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