<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GanadoController;
use App\Models\Madre;
use App\Models\Ganado;
use App\Http\Requests\Bovino\StoreMadreRequest;
use App\Http\Requests\Bovino\UpdateMadreRequest;

class MadreController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMadreRequest $request, Madre $madre)
    {
        //
        $ganado = $this->base->store($request, new Ganado());

        if($ganado->id){
            $madre->ganado_id = $ganado->id;

            if($request->has('lecheria')){
                $madre->lecheria_id = $request->lecheria;
            }

            $madre->alias = $request->alias;
            $madre->tiempo_parto = $request->tiempo_parto;
            $madre->gestando =  $request->gestando;

            if($madre->save()){
                return redirect()->route('vaca.show', ['vaca' => $madre->id]);
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
    public function show(Madre $madre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Madre $madre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMadreRequest $request, Madre $madre)
    {
        //
        $ganado = $this->base->update($request, $madre->ganado);

        if($request->has('lecheria')){
            $madre->lecheria_id = $request->lecheria;
        }

        $madre->alias = $request->alias;
        $madre->tiempo_parto = $request->tiempo_parto;
        $madre->gestando =  $request->gestando;

        if($madre->save()){
            return redirect()->route('vaca.show', ['vaca' => $madre->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Madre $madre)
    {
        //
        $madre->ganado->delete();
        $madre->delete();

        return redirect()->route('vaca.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
