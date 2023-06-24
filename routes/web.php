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


//---- Solo Usuario Autenticados

// Route::middleware()->group(function (){
    
    //---- Rutas para Ganando Bovino
    Route::prefix('/ganados/bovinos')->group(function (){
        
        Route::resources([
            'vaca' => App\Http\Controllers\Bovino\MadreController::class,
            'cria' => App\Http\Controllers\Bovino\CriaController::class,
            'engorde' => App\Http\Controllers\Bovino\EngordeController::class,
            'reproductor' => App\Http\Controllers\Bovino\ReproductorController::class,
            //aspectos sanitarios
            'vacuna' => App\Http\Controllers\VacunaController::class,
            //produccion lactea
            'lecheria' => App\Http\Controllers\LecheriaController::class
        ]);

    });

    Route::prefix('/agricultura')->group(function (){

        Route::resources([
            'terreno' => \App\Http\Controllers\Agricultura\TerrenoController::class,
            'semilla' => \App\Http\Controllers\Agricultura\SemillaController::class
        ]);

    });
// });