@extends('main')

@section('app')

    <x-bladewind.card>
        Registrate en Agromax
    </x-bladewind.card>


    <div class="flex justify-center items-center h-screen">
        <div class="w-1/3 bg-white rounded shadow p-8">
            <h1 class="text-2xl font-bold mb-4">Registra Tus Credenciales</h1>

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

        <div class="flex flex-row justify-between py-3 items-center">
            <x-bladewind.input
            type="password"
            name=" confirmar contraseña"
            label="Confirmar Contraseña"
            required="true"
            prefix="key"
            prefix_is_icon="true"
            class="border-cyan-700"/>
        </x.bladewind-input>
            </div>

        <x-bladewind.button
        has_spinner="true"
        name="registrarse"
        onclick="unhide('.registrarse .bw-spinner')"  >
        Registrar
    </x-bladewind.button>

    @endsection