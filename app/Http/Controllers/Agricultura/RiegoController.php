<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Riego;
use App\Http\Requests\Agricultura\StoreRiegoRequest;
use App\Http\Requests\Agricultura\UpdateRiegoRequest;
use App\Models\Siembra;

class RiegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('agricultura.maiz.riego.lista', [
            'datos' => Riego::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $siembras = Siembra::get()->map(function ($item){
            return [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id
            ];
        });

        return view('agricultura.maiz.riego.crear', [
            'siembras' => $siembras
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRiegoRequest $request, Riego $riego)
    {
        //
        $riego->siembra_id = $request->siembra;
        $riego->cantidad = $request->cantidad;    
        $riego->frecuencia = $request->frecuencia;
        $riego->metodo = $request->metodo;

        if($riego->save()){
            return redirect()->route('riego.show', ['riego' => $riego->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Riego $riego)
    {
        //
        return view('agricultura.maiz.riego.mostrar', [
            'modelo' => $riego
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Riego $riego)
    {
        //
        $siembras = Siembra::get()->map(function ($item) use($riego) {
            return $riego->siembra->id == $item->id ? [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id,
                'selected' => true
            ] : [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id,
                'selected' => true
            ];
        });

        return view('agricultura.maiz.riego.editar', [
            'modelo' => $riego,
            'siembras' => $siembras
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiegoRequest $request, Riego $riego)
    {
        //
        $riego->siembra_id = $request->siembra;
        $riego->cantidad = $request->cantidad;    
        $riego->frecuencia = $request->frecuencia;
        $riego->metodo = $request->metodo;

        if($riego->save()){
            return redirect()->route('riego.show', ['riego' => $riego->id])->withInput([
                'status' => 'Registro realizado exitosamente'
            ]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riego $riego)
    {
        //
        $riego->delete();

        return redirect()->route('riego.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
