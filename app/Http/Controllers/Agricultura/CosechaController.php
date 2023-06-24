<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Cosecha;
use Illuminate\Http\Request;

class CosechaController extends Controller
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
    public function store(Request $request, Cosecha $cosecha)
    {
        //
        $cosecha->siembra_id = $request->siembra;
        $cosecha->afecciones = $request->afecciones;
        $cosecha->fecha = $request->fecha;
        $cosecha->fecha_control_proximo = $request->fecha_control_proximo;
        $cosecha->observaciones = $request->observaciones;

        if($cosecha->save()){
            return redirect()->route('cosecha.show', ['cosecha' => $cosecha->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cosecha $cosecha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cosecha $cosecha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cosecha $cosecha)
    {
        //
        $cosecha->siembra_id = $request->siembra;
        $cosecha->afecciones = $request->afecciones;
        $cosecha->fecha = $request->fecha;
        $cosecha->fecha_control_proximo = $request->fecha_control_proximo;
        $cosecha->observaciones = $request->observaciones;

        if($cosecha->save()){
            return redirect()->route('cosecha.show', ['cosecha' => $cosecha->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cosecha $cosecha)
    {
        //
        $cosecha->delete();

        return redirect()->route('cosecha.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
