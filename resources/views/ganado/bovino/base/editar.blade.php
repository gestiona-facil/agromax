<div class="flex flex-row justify-between items-center py-3">
    {{-- Listado de Madres (Vacas) --}}
    <div class="@isset($lecherias) w-1/4 @else w-1/3 @endif">
        <x-bladewind.select
            :data="$madres"
            name="madre"
            label="Seleccione Madre (vaca): "
            empty_label="No hay registros"
            none_selected_label="ninguno"
            class="border-cyan-700"
        />
    </div>

    {{-- Listado de Padres (Toros) --}}
    <div class="@isset($lecherias) w-1/4 @else w-1/3 @endif">
        <x-bladewind.select
            :data="$padres"
            name="padre"
            label="Seleccione Padre (toro): "
            empty_label="No hay registros"
            none_selected_label="ninguno"
            class="border-cyan-700"
        />   
    </div>

    {{-- Listado de lecherias --}}
    @isset($lecherias)
    <div class="w-1/4">
        <x-bladewind.select
            :data="$lecherias"
            name="lecheria"
            label="Seleccione Lecheria: "
            empty_label="No hay registros"
            none_selected_label="ninguno"
            class="border-cyan-700"
        />   
    </div>
    @endisset
 
</div>
<div class="flex flex-row justify-between py-3">
    <div class="w-1/4">
        <x-bladewind.input 
            name="identificacion" 
            label="Identificación:" 
            value="{{$modelo->ganado->identificacion}}"
            required="true"
            class="border-cyan-700"
        />
    </div>

    <div class="w-1/4">
        <x-bladewind.input 
            name="raza" 
            label="Raza:" 
            value="{{$modelo->ganado->raza}}"
            required="true"
            class="border-cyan-700"
        />
    </div>

    <div class="w-1/4">
        <x-bladewind.input 
            type="date"
            name="fecha_nacimiento" 
            label="Fecha de Nacimiento:" 
            value="{{$modelo->ganado->fecha_nacimiento}}"
            required="true"
            class="border-cyan-700"
        />
    </div>
</div>
{{-- NOTA: sexo debe ser incluido por las vistas que extiendan la presente --}}
<input type="hidden" name="tipo" value="bovino">
