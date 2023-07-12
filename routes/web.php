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
    return view('login');
});

Route::get('/sign', function (){
    return view('sign');
});

Route::get('/dashboard', function (){
    return view('dashboard');

    
});

Route::get('/seleccion', function (){
    return view('seleccion');

    
});
Route::get('/inicio', function (){
    return view('agricultura.maiz.dashboard');
});

Route::get('/inicio2', function (){
    return view('ganado.bovino.dashboard');
})->name('dashgan');


Route::get('/pagina', function (){
    return view('pagina');
});

Route::get('/paginap', function (){
    return view('paginap');
});

Route::get('/pagina2', function (){
    return view('pagina2');
});

Route::get('/pagina3', function (){
    return view('pagina3');
});

Route::get('/pagina4', function (){
    return view('pagina4');
});



//---- Autenticación
Route::controller(App\Http\Controllers\AuthController::class)->group(function (){
    //--- login
    Route::get('/ingresar', 'showLoginForm')->name('login');
    Route::post('/auth-inspeccion', 'login')->name('auth-inspeccion');

    Route::get('/salir', 'logout')->name('logout');

    //--- registrar
    Route::get('/registrar', 'showRegistroForm')->name('registrar');
    Route::post('/auth-guardar', 'registrar')->name('auth-guardar');
});


//---- Solo Usuario Autenticados

// Route::middleware()->group(function (){
    
    //---- Rutas para Ganando
    Route::prefix('/ganados')->group(function (){

        //---- Rutas especificas para Bovinos
        Route::prefix('bovinos')->group(function(){

            Route::prefix('control-lecheria')->group(function (){

                Route::controller(App\Http\Controllers\Bovino\ControlLecheriaController::class)->group(function (){

                    Route::get('{madre}', 'index')->name('bovino.control-lecheria.index');
                    Route::get('{madre}/agregar', 'create')->name('bovino.control-lecheria.create');
                    Route::get('{controlLecheria}/editar', 'edit')->name('bovino.control-lecheria.edit');

                    Route::post('', 'store')->name('bovino.control-lecheria.store');
                    Route::put('{controlLecheria}', 'update')->name('bovino.control-lecheria.update');
                    Route::delete('{controlLecheria}', 'destroy')->name('bovino.control-lecheria.destroy');
                });

            });

            Route::prefix('control-sanitario')->group(function (){

                Route::controller(App\Http\Controllers\Bovino\ControlSanitarioAnimalController::class)->group(function (){

                    Route::get('{ganado}/agregar', 'create')->name('bovino.control-sanitario.create');
                    Route::get('{controlSanitarioAnimal}/editar', 'edit')->name('bovino.control-sanitario.edit');
                    Route::get('{ganado}', 'index')->name('bovino.control-sanitario.index');
                    Route::get('{controlSanitarioAnimal}/ver', 'show')->name('bovino.control-sanitario.show');

                    Route::post('', 'store')->name('bovino.control-sanitario.store');
                    Route::put('{controlSanitarioAnimal}', 'update')->name('bovino.control-sanitario.update');
                    Route::delete('{controlSanitarioAnimal}', 'destroy')->name('bovino.control-sanitario.destroy');

                });

            });
            
            //---- Rutas de exportación
            Route::get('vaca/{vaca}/exportar', [App\Http\Controllers\Bovino\MadreController::class, 'export'])->name('bovino.vaca.exportar');
            Route::get('cria/{crium}/exportar', [App\Http\Controllers\Bovino\CriaController::class, 'export'])->name('bovino.cria.exportar');
            Route::get('engorde/{engorde}/exportar', [App\Http\Controllers\Bovino\EngordeController::class, 'export'])->name('bovino.engorde.exportar');
            Route::get('toro/{toro}/exportar', [App\Http\Controllers\Bovino\ReproductorController::class, 'export'])->name('bovino.toro.exportar');
            Route::get('lecheria/{lecherium}/exportar', [App\Http\Controllers\LecheriaController::class, 'export'])->name('bovino.lecheria.exportar');

            Route::resources([
                'vaca' => App\Http\Controllers\Bovino\MadreController::class,
                'cria' => App\Http\Controllers\Bovino\CriaController::class,
                'engorde' => App\Http\Controllers\Bovino\EngordeController::class,
                'toro' => App\Http\Controllers\Bovino\ReproductorController::class,
                //produccion lactea
                'lecheria' => App\Http\Controllers\LecheriaController::class
            ]);
        });

        Route::resource('vacuna', App\Http\Controllers\VacunaController::class);
    });

    //---- Rutas para Agricultura
    Route::prefix('/agricultura')->group(function (){

        //---- Rutas No especificas para un tipo de rubro
        
        //---- Rutas especificas para Maiz
        Route::prefix('maiz')->group(function (){
            
            Route::get('terreno/{terreno}/exportar', [App\Http\Controllers\Agricultura\TerrenoController::class, 'export'])->name('agricultura.terreno.exportar');
            Route::get('semilla/{semilla}/exportar', [App\Http\Controllers\Agricultura\SemillaController::class, 'export'])->name('agricultura.semilla.exportar');
            Route::get('siembra/{siembra}/exportar', [App\Http\Controllers\Agricultura\SiembraController::class, 'export'])->name('agricultura.siembra.exportar');
            Route::get('cosecha/{cosecha}/exportar', [App\Http\Controllers\Agricultura\CosechaController::class, 'export'])->name('agricultura.cosecha.exportar');
            Route::get('riego/{riego}/exportar', [App\Http\Controllers\Agricultura\RiegoController::class, 'export'])->name('agricultura.riego.exportar');
            Route::get('fertilizacion/{fertilizacion}/exportar', [App\Http\Controllers\Agricultura\FertilizacionController::class, 'export'])->name('agricultura.fertilizacion.exportar');

            Route::resources([
                'terreno' => \App\Http\Controllers\Agricultura\TerrenoController::class,
                'semilla' => \App\Http\Controllers\Agricultura\SemillaController::class,
                'siembra' => \App\Http\Controllers\Agricultura\SiembraController::class,
                'cosecha' => \App\Http\Controllers\Agricultura\CosechaController::class,
                'riego' => \App\Http\Controllers\Agricultura\RiegoController::class,
                'fertilizacion' => \App\Http\Controllers\Agricultura\FertilizacionController::class
            ]);

        });

    });


    Route::resource('finanza', \App\Http\Controllers\FinanzaController::class);
// });
