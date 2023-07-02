@extends('agricultura.cosecha.main')

@section('titulo', 'Lista de fertilizaciones')

@section('titulo-contenido', 'Listado de fertilizaciones')

@section('contenido')
<div>
    <flow-table>
        <flow-table-head>
            <flow-table-head-cell>Nro</flow-table-head-cell>
            <flow-table-head-cell>Fecha</flow-table-head-cell>
            <flow-table-head-cell>Cantidad</flow-table-head-cell>
            <flow-table-head-cell>Acciones</flow-table-head-cell>
        </flow-table-head>
        <flow-table-body>
            @if($datos->count())
                @foreach($datos->items() as $dato)
                    <flow-table-row>
                        <flow-table-cell>{{ $loop->iteration }}</flow-table-cell>
                        <flow-table-cell>{{ $dato->nombre}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->tipo}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->fecha}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->cantidad}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->metodo_aplicacion}}</flow-table-cell>
                        <flow-table-cell>{{ $dato->observaciones}}</flow-table-cell>
                        <flow-table-cell>
                            <flow-button></flow-button>
                            {{-- Eliminar --}}
                            <form action="{{route('fertilizacion.destroy', [
                                'fertilizacium' => $dato->id
                            ])}}" method="post">
                                @csrf
                                @method('delete')
                                <flow-button type="submit" color="red" size="sm">Eliminar</flow-button>
                            </form>
                        </flow-table-cell>
                    </flow-table-row>
                @endforeach
            @else 
                <flow-table-row>
                    <flow-table-cell colspan="4">Aún no existen registros de fertilizaciones</flow-table-cell>
                </flow-table-row>
            @endif