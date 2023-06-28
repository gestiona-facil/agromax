<div class="flex flex-row justify-between items-center">
    {{-- Listado de Madres (Vacas) --}}
    @include('ganado.bovino.base.listado-ganado', [
        'titulo' => 'Seleccionar Madre (vaca)',
        'datos' => $madres,
        'name' => 'madre'
    ])
    {{-- Listado de Padres (Toros) --}}
    @include('ganado.bovino.base.listado-ganado', [
        'titulo' => 'Seleccionar Padre (toros)',
        'datos' => $padres,
        'name' => 'padre'
    ])
</div>
<div class="flex flex-row justify-between pt-2">
    <flow-input type="text" name="identificacion" label="Identificación: *" model-value="{{$modelo->identificacion}}"></flow-input>
    <flow-input type="text" name="raza" label="Raza: *" model-value="{{$modelo->raza}}"></flow-input>
    <flow-input type="date" name="fecha_nacimiento" label="Fecha de Nacimiento: *" model-value="{{$modelo->fecha_nacimiento}}"></flow-input>
</div>
{{-- NOTA: sexo debe ser incluido por las vistas que extiendan la presente --}}
<input type="hidden" name="tipo" value="bovino">
