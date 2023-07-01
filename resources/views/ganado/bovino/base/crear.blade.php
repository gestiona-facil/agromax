<div class="flex flex-row justify-between items-center py-3">
    <x-bladewind.dropdown
        placeholder="Seleccione Madre (vaca)"
        name="madre"
        data=" {{ json_encode($madres->toArray()) }} "
    />
    {{-- Listado de Madres (Vacas) --}}
    {{-- @include('ganado.bovino.base.listado-ganado', [
        'titulo' => 'Seleccionar Madre (vaca)',
        'datos' => $madres,
        'name' => 'madre'
    ]) --}}
    {{-- Listado de Padres (Toros) --}}
    @include('ganado.bovino.base.listado-ganado', [
        'titulo' => 'Seleccionar Padre (toros)',
        'datos' => $padres,
        'name' => 'padre'
    ])
</div>
<div class="flex flex-row justify-between py-3">
    <div class="w-1/4">
        <x-bladewind.input 
            name="identificacion" 
            label="Identificación:" 
            value="{{old('identificacion')}}"
            required="true"
            class="border-cyan-700"
        />
    </div>

    <div class="w-1/4">
        <x-bladewind.input 
            name="raza" 
            label="Raza:" 
            value="{{old('raza')}}"
            required="true"
            class="border-cyan-700"
        />
    </div>

    <div class="w-1/4">
        <x-bladewind.input 
            type="date"
            name="fecha_nacimiento" 
            label="Fecha de Nacimiento:" 
            value="{{old('fecha_nacimiento')}}"
            required="true"
            class="border-cyan-700"
        />
    </div>
</div>
{{-- NOTA: sexo debe ser incluido por las vistas que extiendan la presente --}}
<input type="hidden" name="tipo" value="bovino">
