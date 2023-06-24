<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Semilla;
use Illuminate\Http\Request;

class SemillaController extends Controller
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
    public function store(Request $request, Semilla $semilla)
    {
        //
        $semilla->vegetal_id = $request->vegetal;

        $semilla->marca = $request->marca;
        $semilla->cantidad =  $request->cantidad;

        if($semilla->save()){
            return redirect()->route('semilla.show', ['semilla' => $semilla->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Semilla $semilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semilla $semilla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semilla $semilla)
    {
        //
        $semilla->marca = $request->marca;
        $semilla->cantidad =  $request->cantidad;
        
        if($semilla->save()){
            return redirect()->route('semilla.show', ['semilla' => $semilla->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semilla $semilla)
    {
        //
        $semilla->delete();

        return redirect()->route('semilla.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
