<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Semilla;
use App\Models\Vegetal as Planta;
use App\Http\Requests\Agricultura\StoreSemillaRequest;
use App\Http\Requests\Agricultura\UpdateSemillaRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class SemillaController extends Controller
{
    public function export(Semilla $semilla){
        
        $pdf = Pdf::loadView('agricultura.maiz.semilla.exportar', [
            'modelo' => $semilla
        ]);

        return $pdf->download('AGROMAX-'.Str::random(7).'.pdf');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('agricultura.maiz.semilla.lista', [
            'datos' => Semilla::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('agricultura.maiz.semilla.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSemillaRequest $request, Semilla $semilla)
    {
        //
        $semilla->marca = $request->marca;
        $semilla->cantidad =  $request->cantidad;

        if($semilla->save()){
            return redirect()->route('semilla.show', ['semilla' => $semilla->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Semilla $semilla)
    {
        //
        return view('agricultura.maiz.semilla.mostrar', [
            'modelo' => $semilla
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semilla $semilla)
    {
        //
        return view('agricultura.maiz.semilla.editar', [
            'modelo' => $semilla
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semilla $semilla)
    {
        //
        $semilla->marca = $request->marca;
        $semilla->cantidad =  $request->cantidad;
        
        if($semilla->save()){
            return redirect()->route('semilla.show', ['semilla' => $semilla->id])->withInput([
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
    public function destroy(Semilla $semilla)
    {
        //
        $semilla->delete();

        return redirect()->route('semilla.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
