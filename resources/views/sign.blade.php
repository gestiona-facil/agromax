@extends('main')

@section('app')
    <form action="{{ route('auth-guardar')}}"  method="post" class="flex justify-center items-center h-screen bg-gradient-to-r from-green-700 to-cyan-700">
        @csrf
        <div class="w-2/3 bg-white rounded shadow p-8">
            
            <img src="{{ asset('img/logo.png')}}" class="h-14">
            <h1 class="text-2xl font-bold mb-4 text-center">Registra Tus Credenciales</h1>

            <div>
                <div class="flex items-center justify-between">
                    <div class="px-2">
                        <x-bladewind.input
                            name="nombre_empresa"
                            label="Nombre de la empresa:"
                            required="true" 
                            prefix="envelope"
                            prefix_is_icon="true"
                            value="{{ old('nombre_empresa') }}"
                            class="border-cyan-700" />
                    </div>
                    <div class="px-2">
                        <x-bladewind.input
                            name="email"
                            label="Email:"
                            required="true" 
                            prefix="envelope"
                            prefix_is_icon="true"
                            value="{{ old('email') }}"
                            class="border-cyan-700" />
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="px-2">
                        <x-bladewind.input
                            type="password"
                            name="password"
                            label="Contraseña"
                            required="true"
                            prefix="key"
                            prefix_is_icon="true"
                            class="border-cyan-700"
                        />
                    </div>
                    <div class="px-2">
                        <x-bladewind.input
                            type="password"
                            name="password_confirmation"
                            label="Confirmar Contraseña"
                            required="true"
                            prefix="key"
                            prefix_is_icon="true"
                            class="border-cyan-700"
                        />
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="px-2">
                        <x-bladewind.input
                            name="pregunta"
                            label="Pregunta de Seguridad"
                            required="true"
                            prefix="key"
                            prefix_is_icon="true"
                            class="border-cyan-700"
                        />
                    </div>
                    <div class="px-2">
                        <x-bladewind.input
                            name="respuesta"
                            label="Respuesta de Seguridad"
                            required="true"
                            prefix="key"
                            prefix_is_icon="true"
                            class="border-cyan-700"
                        />
                    </div>
                </div>

                <x-bladewind.button
                    can_submit="true"
                    class="bg-cyan-500 focus:ring-cyan-500 mt-4"
                >Registrar</x-bladewind.button>
            </div>
        </div>
    </form>
@endsection