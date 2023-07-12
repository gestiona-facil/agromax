@extends('ganado.bovino.exportar.main')

@section('contenido')
<div class="cuerpo">
    <h2 class="cuerpo__titulo"> Datos de Lecheria</h2>
    <div class="contenido">
        <!-- Sección izquierda -->
        <div class="contenido__izq">
            <div class="contenido__campo">
                <h3>Alias: </h3>
                <span>{{ $modelo->alias }}</span>
            </div>
        </div>
        <!-- Sección derecha -->
        <div class="contenido__der">
            <div class="contenido__campo">
                <h3>Meta de producción: </h3>
                <span>{{ $modelo->cant_meta }} Litros al dias</span>
            </div>
        </div>
        <!-- Sección central -->
        <div class="contenido__center">
            <div class="contenido__campo">
                <h3>Observaciones: </h3>
                <p>{{ $modelo->observaciones ? $modelo->observaciones : 'No hay observaciones' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection