@extends('main')

@section('app')
    <form method="POST" action="{{ route('larutaporsupuestojaja') }}">
        @csrf
        <flow-input type="text" label="Email: *" name="email"></flow-input>
        <flow-input type="password" label="Clave: *" name="password"></flow-input>
        <flow-button>Iniciar sesión</flow-button>
    </form>
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
@endsection

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('welcome');
    } else {
        return redirect()->back()->with('error', 'Las credenciales son incorrectas');
    }
}
