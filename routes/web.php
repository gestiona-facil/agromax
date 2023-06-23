<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function (){
    return view('testing');
});


//---- Autenticación
Route::controller(App\Http\Controllers\AuthController::class)->group(function (){
    //--- login
    Route::get('/ingresar', 'showLoginForm')->name('login');
    Route::post('/auth-inspeccion', 'login')->name('auth-inspeccion');
    //--- registrar
    Route::get('/registrar', 'showRegistroForm')->name('registrar');
    Route::post('/auth-guardar', 'registrar')->name('auth-guardar');


});