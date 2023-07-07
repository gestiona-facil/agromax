<?php

namespace App\Http\Controllers;

use App\Models\InformacionGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PreguntaRespuesta;

class AuthController extends Controller
{
    //formulario para registro
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegistroForm(){
        return view('sign');
    }

    //procesar autenticación
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'La credenciales ingresadas NO coinciden con nuestros registros',
        ]);
    }

    //procesar registro
    public function registrar(Request $request){
        $usuario = new User();
        $info = new InformacionGeneral();

        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->pregunta_seguridad = $request->pregunta;
        $usuario->respuesta_seguridad = $request->respuesta;

        if(!$usuario->save()){
            return back()->withErrors([
                'status' => 'No fue posible realizar el registro'
            ]);
        }

        //-- en este punto, usuario ya guardado
        $info->nombre_empresa = $request->nombre_empresa;
        //TODO: el registro de las seguiente se hace en editar perfil
        // $info->codigo_hierro = $request->hierro;
        // $info->cant_hectareas = $request->hectareas;
        $info->save();

        return redirect()->route('login')->withInput([
            'registro' => '¡Datos registrados exitosamente!' 
        ]);
    }


    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
