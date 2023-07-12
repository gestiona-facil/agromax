@extends('ganado.bovino.exportar.main')

@section('contenido')
<div class="cuerpo">
    <h2 class="cuerpo__titulo"> Datos de Semilla</h2>
    <div class="contenido">
        <!-- Sección izquierda -->
        <div class="contenido__izq">
            <div class="contenido__campo">
                <h3>Marca: </h3>
                <span>{{ $modelo->marca }}</span>
            </div>
        </div>
        <!-- Sección derecha -->
        <div class="contenido__der">
            <div class="contenido__campo">
                <h3>Cantidad: </h3>
                <span>{{ $modelo->cantidad }}</span>
            </div>
        <div>
    </div>
</div>
@endsection