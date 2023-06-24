<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Siembra;
use Illuminate\Http\Request;

class SiembraController extends Controller
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
    public function store(Request $request, Siembra $siembra)
    {
        //
        $siembra->semilla_id = $request->semilla;
        $siembra->terreno_id = $request->terreno;    
        $siembra->fecha = $request->fecha;
        $siembra->cant_esperada = $request->cant_esperada;

        if($siembra->save()){
            return redirect()->route('siembra.show', ['siembra' => $siembra->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Siembra $siembra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siembra $siembra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siembra $siembra)
    {
        //
        $siembra->semilla_id = $request->semilla;
        $siembra->terreno_id = $request->terreno;    
        $siembra->fecha = $request->fecha;
        $siembra->cant_esperada = $request->cant_esperada;

        if($siembra->save()){
            return redirect()->route('siembra.show', ['siembra' => $siembra->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siembra $siembra)
    {
        //
        $siembra->delete();

        return redirect()->route('siembra.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
