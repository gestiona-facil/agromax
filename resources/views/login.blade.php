@extends('main')

@section('header')

@section('app')

<x-bladewind.centered-content size="Tiny">

    <x-bladewind.card>
        Iniciar Sesión
    </x-bladewind.card>



<div class="flex flex-row justify-between py-3 items-center">
        <x-bladewind.input
        name="email"
        label="Email:"
        required="true" 
        prefix="envelope"
        prefix_is_icon="true"
        class="border-cyan-700" />
    </x.bladewind-input>

        <div class="flex flex-row justify-between py-3 items-center">
        <x-bladewind.input
        type="password"
        name="contraseña"
        label="Contraseña"
        required="true"
        prefix="key"
        prefix_is_icon="true"
        class="border-cyan-700"/>
    </x.bladewind-input>
        </div>

        <x-bladewind.button color="cyan" hover="blue">
            Iniciar
        </x-bladewind.button>

    </x-bladewind.centered-content>
    @endsection

