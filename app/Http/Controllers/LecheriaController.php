<?php

namespace App\Http\Controllers;

use App\Models\Lecheria;
use App\Http\Requests\StoreLecheriaRequest;
use App\Http\Requests\UpdateLecheriaRequest;

class LecheriaController extends Controller
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
    public function store(StoreLecheriaRequest $request, Lecheria $lecheria)
    {
        //
        $lecheria = $request->alias;
        $lecheria = $request->tipo_alimento;
        $lecheria = $request->cant_meta;
        $lecheria = $request->observaciones;

        if($lecheria->save()){
            return redirect()->route('lecheria.index')->withInput([
                'status' => 'Registro realizado exitosamente'
            ]);
        }

        //este punto, indica que hubo error
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecheria $lecheria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecheria $lecheria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLecheriaRequest $request, Lecheria $lecheria)
    {
        //
        $lecheria = $request->alias;
        $lecheria = $request->tipo_alimento;
        $lecheria = $request->cant_meta;
        $lecheria = $request->observaciones;

        if($lecheria->save()){
            return redirect()->route('lecheria.index')->withInput([
                'status' => 'Datos guardados exitosamente'
            ]);
        }

        //este punto, indica que hubo error
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecheria $lecheria)
    {
        //
        $lecheria->delete();

        return redirect()->route('lecheria.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
