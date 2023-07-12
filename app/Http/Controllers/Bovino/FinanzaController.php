<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Models\Finanza;
use App\Http\Requests\StoreFinanzaRequest;
use App\Http\Requests\UpdateFinanzaRequest;

class FinanzaController extends Controller
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
        return view('ganado.bovino.finanzas.crear',[
            'naturaleza' => collect([
                ['label' => 'Ingreso', 'value' => 1],
                ['label' => 'Egreso', 'value' => 0]
            ])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFinanzaRequest $request, Finanza $finanza)
    {
        //
        $finanza->concepto = $request->concepto;
        $finanza->naturaleza = !!$request->naturaleza;    
        $finanza->monto = $request->monto;
        $finanza->fecha = $request->fecha;
        $finanza->observaciones = $request->observaciones;

        if($finanza->save()){
            return redirect()->route('bovino.finanza.show', ['finanza' => $finanza->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Finanza $finanza)
    {
        //
        return view('ganado.bovino.finanzas.mostrar', ['modelo' => $finanza]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finanza $finanza)
    {
        //
        $naturaleza = collect([]);

        $naturaleza->add($finanza->naturaleza ? ['label' => 'Ingreso', 'value' => 1, 'selected' => true ] : ['label' => 'Ingreso', 'value' => 1]);
        $naturaleza->add($finanza->naturaleza ? ['label' => 'Egreso', 'value' => 0] : ['label' => 'Egreso', 'value' => 0, 'selected' => true]);

        return view('ganado.bovino.finanzas.editar', [
            'modelo' => $finanza,
            'naturaleza' => $naturaleza
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFinanzaRequest $request, Finanza $finanza)
    {
        //
        $finanza->concepto = $request->concepto;
        $finanza->naturaleza = $request->naturaleza;    
        $finanza->monto = $request->monto;
        $finanza->fecha = $request->fecha;
        $finanza->observaciones = $request->observaciones;

        if($finanza->save()){
            return redirect()->route('bovino.finanza.show', ['finanza' => $finanza->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finanza $finanza)
    {
        //
        $finanza->delete();

        return redirect()->route('finanza.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
