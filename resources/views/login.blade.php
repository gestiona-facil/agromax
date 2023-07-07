@extends('main')

@section('app')

<x-bladewind.card>

</x-bladewind.card>

<div class="flex justify-center items-center h-screen">
    <div class="w-1/3 bg-white rounded shadow p-8">
        <h1 class="text-2xl font-bold mb-4 ">Iniciar Sesión</h1>

        <div class="mb-4">
            <x-bladewind.input
                name="email"
                label="Email:"
                required="true"
                prefix="envelope"
                prefix_is_icon="true"
                class="border-cyan-700"
            />
        </div>

        <div class="mb-4">
            <x-bladewind.input
                type="password"
                name="contraseña"
                label="Contraseña"
                required="true"
                prefix="key"
                prefix_is_icon="true"
                class="border-cyan-700"
            />
        </div>

        <div>
            <p class="link"> 
            <x-bladewind.button color="cyan" hover="blue">
               <a href="dashboard"> Iniciar</a>
            </x-bladewind.button>
            
        </div>
        <br>
            <b>
                <p class="link">
                    No posee cuenta,
                    <a href="sign">Registrate</a>
                  </p></b>
    </div>
</div>