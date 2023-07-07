<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Siembra;
use App\Http\Requests\Agricultura\StoreSiembraRequest;
use App\Http\Requests\Agricultura\UpdateSiembraRequest;
use App\Models\Semilla;
use App\Models\Terreno;

class SiembraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('agricultura.maiz.siembra.lista', [
            'datos' => Siembra::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $semillas = Semilla::all()->map(function ($item){
            return [
                'label' => $item->marca,
                'value' => $item->id
            ];
        });
        
        $terrenos = Terreno::all()->map(function ($item){
            return [
                'label' => $item->id.' - '.$item->ubicacion,
                'value' => $item->id
            ];
        });

        return view('agricultura.maiz.siembra.crear',[
            'semillas' => $semillas,
            'terrenos' => $terrenos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiembraRequest $request, Siembra $siembra)
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
        return view('agricultura.maiz.siembra.mostrar', [
            'modelo' => $siembra
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siembra $siembra)
    {

        $semillas = Semilla::get()->map(function ($item) use($siembra) {
            return $siembra->id == $item->id ? [
                'label' => $item->marca,
                'value' => $item->id,
                'selected' => true
            ] : [
                'label' => $item->marca,
                'value' => $item->id
            ];
        });

        
        $terrenos = Terreno::get()->map(function ($item) use($siembra) {
            return $siembra->id == $item->id ? [
                'label' => $item->id.' - '.$item->ubicacion,
                'value' => $item->id,
                'selected' => true
            ] : [
                'label' => $item->id.' - '.$item->ubicacion,
                'value' => $item->id
            ];
        });

        return view('agricultura.maiz.siembra.editar',[
            'semillas' => $semillas,
            'terrenos' => $terrenos,
            'modelo' => $siembra
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiembraRequest $request, Siembra $siembra)
    {
        //
        $siembra->semilla_id = $request->semilla;
        $siembra->terreno_id = $request->terreno;    
        $siembra->fecha = $request->fecha;
        $siembra->cant_esperada = $request->cant_esperada;

        if($siembra->save()){
            return redirect()->route('siembra.show', ['siembra' => $siembra->id])->withInput([
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
    public function destroy(Siembra $siembra)
    {
        //
        $siembra->delete();

        return redirect()->route('siembra.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
