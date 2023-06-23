<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //formulario para registro
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistroForm(){
        return view('auth.sign');
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
        
    }
}
