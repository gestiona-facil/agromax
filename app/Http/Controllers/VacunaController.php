<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use App\Http\Requests\StoreVacunaRequest;
use App\Http\Requests\UpdateVacunaRequest;

class VacunaController extends Controller
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
    public function store(StoreVacunaRequest $request, Vacuna $vacuna)
    {
        //
        $vacuna->nombre = $request->nombre;
        $vacuna->lote = $request->lote;
        $vacuna->fecha = $request->fecha;

        if($vacuna->save()){
            return redirect()->route('vacuna.show', ['vacuna' => $vacuna->id]);
        }

        //llegar a este punto indica error
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacuna $vacuna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacuna $vacuna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacunaRequest $request, Vacuna $vacuna)
    {
        //
        $vacuna->nombre = $request->nombre;
        $vacuna->lote = $request->lote;
        $vacuna->fecha = $request->fecha;

        if($vacuna->save()){
            return redirect()->route('vacuna.show', ['vacuna' => $vacuna->id]);
        }

        //llegar a este punto indica error
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacuna $vacuna)
    {
        //
        $vacuna->delete();

        return redirect()->route('vacuna.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
