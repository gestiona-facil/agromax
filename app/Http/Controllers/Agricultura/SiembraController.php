<?php

namespace App\Http\Controllers\Agricultura;

use App\Http\Controllers\Controller;
use App\Models\Siembra;
use App\Http\Requests\Agricultura\StoreSiembraRequest;
use App\Http\Requests\Agricultura\UpdateSiembraRequest;

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
        return view('agricultura.maiz.siembra.crear');
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
        //
        return view('agricultura.maiz.siembra.editar', [
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
