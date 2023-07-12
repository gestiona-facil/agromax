@extends ('main')

@section('app' ) 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate en Agromax</title>
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen bg-opacity-90 " style="background-image: url('../img/f1.jpg') ">
    <form action="{{ route('auth-guardar')}}"  method="post" class="flex justify-center items-center h-screen ">
        @csrf
        <div class="w-2/3 bg-gradient-to-r from-cyan-700 to-green-700 opacity-80 rounded shadow p-8">
            
            <img src="{{ asset('img/logo.png')}}" class="h-14">
            <h1 class="text-2xl font-bold mb-4 text-center text-white">Recupera tu contraseña</h1>

            <div>
                <div class="flex items-center justify-between font-semibold text-white ">
                    <div class="px-2 ">
                        <x-bladewind.input
                            name="respuesta_de_seguridad"
                            label="Respuesta:"
                            required="true" 
                            prefix="envelope"
                            prefix_is_icon="true"
                            value="{{ old('nombre_empresa') }}"
                            class="border-cyan-700" />
                    </div>
                    <div class="px-2 text-white font-semibold">
                        <x-bladewind.input
                            type="password"
                            name="nueva_contraseña"
                            label="Nueva Contraseña:"
                            required="true" 
                            prefix="envelope"
                            prefix_is_icon="true"
                            value="{{ old('email') }}"
                            class="border-cyan-700" />
                    </div>
                </div>
                    <div class="px-2 text-white font-semibold">
                        <x-bladewind.input
                            type="password"
                            name="password_confirmation"
                            label="Confirmar Nueva Contraseña"
                            required="true"
                            prefix="key"
                            prefix_is_icon="true"
                            class="border-cyan-700"
                        />
                    </div>
                </div>
                <h1 class="text-xg text-white font-semibold">Si olvidaste tu respuesta a la pregunta de seguridad <b>Contactame</b> a mi coreo electrónico para brindarte
                    soporte técnico al respecto yjcq007@gmail.com
                </h1>
                <x-bladewind.button
                    can_submit="true"
                    class="bg-cyan-500 focus:ring-cyan-500 mt-4 font-semibold"
                >Registrar</x-bladewind.button>
            </div>
        </div>
    </form>
</body>
</html>
@endsection
   