<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Vegetal;
use Illuminate\Http\Request;

class PlantaController extends Controller
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
    public function store(Request $request, Vegetal $vegetal)
    {
        //
        $vegetal->ubicacion = $request->ubicacion;

        if($vegetal->save()){
            return redirect()->route('planta.show', ['planta' => $vegetal->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vegetal $vegetal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vegetal $vegetal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vegetal $vegetal)
    {
        //
        $vegetal->vegetal = $request->vegetal;

        if($vegetal->save()){
            return redirect()->route('planta.show', ['planta' => $vegetal->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vegetal $vegetal)
    {
        //
        $vegetal->delete();

        return redirect()->route('planta.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
