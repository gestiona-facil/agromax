<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Cosecha;
use App\Http\Requests\Agricultura\StoreCosechaRequest;
use App\Http\Requests\Agricultura\UpdateCosechaRequest;
use App\Models\Siembra;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class CosechaController extends Controller
{
    public function export(Cosecha $cosecha){
        
        $pdf = Pdf::loadView('agricultura.maiz.cosecha.exportar', [
            'modelo' => $cosecha
        ]);

        return $pdf->download('AGROMAX-'.Str::random(7).'.pdf');
    }

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
        $siembras = Siembra::get()->map(function ($item){
            return [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id
            ];
        });

        return view('agricultura.maiz.cosecha.crear', ['siembras' => $siembras]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCosechaRequest $request, Cosecha $cosecha)
    {
        //

        $cosecha->siembra_id = $request->siembra;
        $cosecha->fecha = $request->fecha;
        $cosecha->cantidad = $request->cantidad;

        if($cosecha->save()){
            return redirect()->route('cosecha.show', ['cosecha' => $cosecha->id]);
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
        $siembras = Siembra::get()->map(function ($item) use($cosecha){
            return $cosecha->siembra->id == $item->id ? [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id,
                'selected' => true
            ] : [
                'label' => $item->terreno->ubicacion,
                'value' => $item->id
            ];
        });

        return view('agricultura.maiz.cosecha.editar', [
            'modelo' => $cosecha,
            'siembras' => $siembras
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCosechaRequest $request, Cosecha $cosecha)
    {
        //
        $cosecha->siembra_id = $request->siembra;
        $cosecha->cantidad = $request->cantidad;
        $cosecha->fecha = $request->fecha;

        if($cosecha->save()){
            return redirect()->route('cosecha.show', ['cosecha' => $cosecha->id])->withInput([
                'status' => 'Registro realizado exitosamente'
            ]);

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }
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
