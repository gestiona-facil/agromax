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
        return view('agricultura.maiz.cosecha.lista', [
            'datos' => Cosecha::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('agricultura.maiz.cosecha.crear');
    }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCosechaRequest $request, Cosecha $cosecha)
    {
        //
        $cosecha->siembra_id = $request->siembra;
        $cosecha->afecciones = $request->afecciones;
        $cosecha->fecha = $request->fecha;
        $cosecha->fecha_control_proximo = $request->fecha_control_proximo;
        $cosecha->observaciones = $request->observaciones;

        if($cosecha->save()){
            return redirect()->route('cosecha.show', ['cosechum' => $cosecha->id]);
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
        return view('agricultura.maiz.cosecha.mostrar', [
            'modelo' => $cosecha
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cosecha $cosecha)
    {
        //
        return view('agricultura.maiz.cosecha.editar', [
            'modelo' => $cosecha
        ]);
    }
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
            return redirect()->route('cosecha.show', ['cosecha' => $cosecha->id])->withInput([
                'status' => 'Registro realizado exitosamente'
            ]);

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
