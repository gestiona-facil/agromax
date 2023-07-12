<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Fertilizacion;
use App\Models\Siembra;
use App\Http\Requests\Agricultura\StoreFertilizacionRequest;
use App\Http\Requests\Agricultura\UpdateFertilizacionRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class FertilizacionController extends Controller
{
    public function export(Fertilizacion $fertilizacion){
        
        $pdf = Pdf::loadView('agricultura.maiz.fertilizacion.exportar', [
            'modelo' => $fertilizacion
        ]);

        return $pdf->download('AGROMAX-'.Str::random(7).'.pdf');
    }
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
        $siembras = Siembra::get()->map(function ($item){
            return [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id
            ];
        });

        return view('agricultura.maiz.fertilizacion.crear',[
            'siembras' => $siembras
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFertilizacionRequest $request, Fertilizacion $fertilizacion)
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
        $siembras = Siembra::get()->map(function ($item) use($fertilizacion){
            return $fertilizacion->siembra->id == $item->id ? [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id,
                'selected' => true
            ]: [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id,
            ];
        });

        return view('agricultura.maiz.fertilizacion.editar', [
            'modelo' => $fertilizacion,
            'siembras' => $siembras
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFertilizacionRequest $request, Fertilizacion $fertilizacion)
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
