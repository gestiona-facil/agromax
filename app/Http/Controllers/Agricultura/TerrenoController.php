<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Terreno;
use Illuminate\Http\Request;

class TerrenoController extends Controller
{
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
    public function store(Request $request, Terreno $terreno)
    {

        $terreno->ubicacion = $request->ubicacion;
        $terreno->hectareas = $request->hectareas;
        $terreno->tipo_suelo =  $request->tipo_suelo;
        $terreno->nivel_humedad =  $request->nivel_humedad;

        if($terreno->save()){
            return redirect()->route('terreno.show', ['terreno' => $terreno->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Terreno $terreno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terreno $terreno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terreno $terreno)
    {
        //
        $terreno->ubicacion = $request->ubicacion;
        $terreno->hectareas = $request->hectareas;
        $terreno->tipo_suelo =  $request->tipo_suelo;
        $terreno->nivel_humedad =  $request->nivel_humedad;

        if($terreno->save()){
            return redirect()->route('terreno.show', ['terreno' => $terreno->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terreno $terreno)
    {
        //
        $terreno->delete();

        return redirect()->route('terreno.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
