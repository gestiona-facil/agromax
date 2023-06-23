<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GanadoController;
use App\Models\Cria;
use App\Models\Ganado;
use App\Http\Requests\Bovino\StoreCriaRequest;
use App\Http\Requests\Bovino\UpdateCriaRequest;
use Illuminate\Http\Request;

class CriaController extends Controller
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
    public function store(StoreCriaRequest $request, Cria $cria)
    {
        //
        $ganado = $this->base->store($request, new Ganado());

        if($ganado->id){
            $cria->ganado_id = $ganado->id;

            $cria->alias = $request->alias;
            $cria->destetado =  $request->destetado;

            if($cria->save()){
                return redirect()->route('cria.show', ['cria' => $cria->id]);
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
    public function show(Cria $cria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cria $cria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCriaRequest $request, Cria $cria)
    {
        //
        $ganado = $this->base->update($request, $cria->ganado);

        $cria->alias = $request->alias;
        $cria->destetado =  $request->destetado;

        if($cria->save()){
            return redirect()->route('cria.show', ['cria' => $cria->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cria $cria)
    {
        //
        $cria->ganado->delete();
        $cria->delete();

        return redirect()->route('cria.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
