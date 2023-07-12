<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Terreno;
use App\Http\Requests\Agricultura\StoreTerrenoRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class TerrenoController extends Controller
{
    public function export(Terreno $terreno){
        
        $pdf = Pdf::loadView('agricultura.maiz.terreno.exportar', [
            'modelo' => $terreno
        ]);

        return $pdf->download('AGROMAX-'.Str::random(7).'.pdf');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('agricultura.maiz.terreno.lista', [
            'datos' => Terreno::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('agricultura.maiz.terreno.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTerrenoRequest $request, Terreno $terreno)
    {

        $terreno->ubicacion = $request->ubicacion;
        $terreno->hectareas = $request->hectareas;
        $terreno->tipo_suelo =  $request->tipo_suelo;
        $terreno->nivel_humedad =  $request->nivel_humedad;

        if($terreno->save()){
            return redirect()->route('terreno.show', ['terreno' => $terreno->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Terreno $terreno)
    {
        //
        return view('agricultura.maiz.terreno.mostrar', [
            'modelo' => $terreno
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terreno $terreno)
    {
        //
        return view('agricultura.maiz.terreno.editar', [
            'modelo' => $terreno
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terreno $terreno)
    {
        //
        $terreno->ubicacion = $request->ubicacion;
        $terreno->hectareas = $request->hectareas;
        $terreno->tipo_suelo =  $request->tipo_suelo;
        $terreno->nivel_humedad =  $request->nivel_humedad;

        if($terreno->save()){
            return redirect()->route('terreno.show', ['terreno' => $terreno->id])->withInput([
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
    public function destroy(Terreno $terreno)
    {
        //
        $terreno->delete();

        return redirect()->route('terreno.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
