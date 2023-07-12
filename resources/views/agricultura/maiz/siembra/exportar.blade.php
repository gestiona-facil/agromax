@extends('ganado.bovino.exportar.main')

@section('contenido')
<div class="cuerpo">
    <h2 class="cuerpo__titulo"> Datos de Siembra</h2>
    <div class="contenido">
        <!-- Sección izquierda -->
        <div class="contenido__izq">
            <div class="contenido__campo">
                <h3>Semilla: </h3>
                <span>{{ $modelo->semilla->marca }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Fecha: </h3>
                <span>{{ $modelo->fecha }}</span>
            </div>
        </div>
        <!-- Sección derecha -->
        <div class="contenido__der">
            <div class="contenido__campo">
                <h3>Terreno: </h3>
                <span>{{ $modelo->terreno->ubicacion }}</span>
            </div>
            <div class="contenido__campo">
                <h3>Cantidad Esperada: </h3>
                <span>{{ $modelo->cant_esperada }} Kg</span>
            </div>
        <div>
    </div>
</div>
@endsection