<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GanadoController;
use App\Models\Reproductor;
use App\Models\Ganado;
use App\Models\Madre;
use App\Http\Requests\Bovino\StoreReproductorRequest;
use App\Http\Requests\Bovino\UpdateReproductorRequest;
use Illuminate\Http\Request;

class ReproductorController extends Controller
{
    private $base;

    public function __construct(GanadoController $ganado)
    {
        $this->base = $ganado;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ganado.bovino.toro.crear', [
            'madres' => Madre::join('ganados', 'reproductor.ganado_id', '=', 'ganados.id')
                        ->where('ganados.tipo', '=', 'bovino')
                        ->select('reproductor.*')
                        ->get(),

            'padres' => collect([]),//TODO: agregar de forma similar que arriba, pero problema con nombre de tabla es presentado
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReproductorRequest $request, Reproductor $reproductor)
    {
        //
        $ganado = $this->base->store($request, new Ganado());

        if($ganado->id){
            $reproductor->ganado_id = $ganado->id;

            $reproductor->tipo_alimentacion = $request->tipo_alimentacion;
            $reproductor->tiempo_madurez = $request->tiempo_madurez;

            if($reproductor->save()){
                return redirect()->route('toro.mostrar', ['reproductor' => $reproductor->id]);
            }
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Reproductor $reproductor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reproductor $reproductor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reproductor $reproductor)
    {
        //
        $ganado = $this->base->update($request, $reproductor->ganado);

        $reproductor->tipo_alimentacion = $request->tipo_alimentacion;
        $reproductor->tiempo_madurez = $request->tiempo_madurez;

        if($reproductor->save()){
            return redirect()->route('reproductor.show', ['reproductor' => $reproductor->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reproductor $reproductor)
    {
        //
        $reproductor->ganado->delete();
        $reproductor->delete();

        return redirect()->route('reproductor.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
