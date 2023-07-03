<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Fertilizacion;
use Illuminate\Http\Request;

class FertilizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('agricultura.maiz.fertilizacion.lista', [
            'datos' => Fertilizacion::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('agricultura.maiz.fertilizacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorCosechaRequest $request, Fertilizacion $fertilizacion)
    {
        //
        $fertilizacion->siembra_id = $request->siembra;
        $fertilizacion->nombre = $request->nombre;    
        $fertilizacion->tipo = $request->tipo;
        $fertilizacion->fecha = $request->fecha;
        $fertilizacion->cantidad = $request->cantidad;
        $fertilizacion->metodo_aplicacion = $request->metodo_aplicacion;
        $fertilizacion->observaciones = $request->onservaciones;

        if($fertilizacion->save()){
            return redirect()->route('fertilizacion.show', ['fertilizacion' => $fertilizacion->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Fertilizacion $fertilizacion)
    {
        //
        return view('agricultura.maiz.fertilizacion.mostrar', [
            'modelo' => $fertilizacion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fertilizacion $fertilizacion)
    {
        //
        return view('agricultura.maiz.fertilizacion.editar', [
            'modelo' => $fertilizacion
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fertilizacion $fertilizacion)
    {
        //
        $fertilizacion->siembra_id = $request->siembra;
        $fertilizacion->nombre = $request->nombre;    
        $fertilizacion->tipo = $request->tipo;
        $fertilizacion->fecha = $request->fecha;
        $fertilizacion->cantidad = $request->cantidad;
        $fertilizacion->metodo_aplicacion = $request->metodo_aplicacion;
        $fertilizacion->observaciones = $request->onservaciones;

        if($fertilizacion->save()){
            return redirect()->route('fertilizacion.show', ['fertilizacion' => $fertilizacion->id])->withInput([
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
    public function destroy(Fertilizacion $fertilizacion)
    {
        //
        $fertilizacion->delete();

        return redirect()->route('fertilizacion.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
