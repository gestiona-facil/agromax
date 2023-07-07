<?php

namespace App\Http\Controllers;

use App\Models\Madre;
use App\Models\Lecheria;
use App\Http\Requests\StoreLecheriaRequest;
use App\Http\Requests\UpdateLecheriaRequest;

class LecheriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('ganado.bovino.lecheria.lista', [
            'datos' => Lecheria::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $madres = Madre::with('ganado')->join('ganados', 'madres.ganado_id', '=', 'ganados.id')
            ->where('ganados.tipo', '=', 'bovino')
            ->select('madres.*')
            ->get()
            ->map(function ($item){
                return [
                    'label' => $item->ganado->identificacion,
                    'value' => $item->id
                ];
            });

        return view('ganado.bovino.lecheria.crear', [
            'madres' => $madres,
            'padres' => collect([])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLecheriaRequest $request, Lecheria $lecheria)
    {
        //
        $lecheria->alias = $request->alias;
        $lecheria->tipo_alimento = $request->tipo_alimento;
        $lecheria->cant_meta = $request->cant_meta;
        $lecheria->observaciones = $request->observaciones;

        if($lecheria->save()){
            return redirect()->route('lecheria.show', ['lecherium' => $lecheria->id])->withInput([
                'status' => 'Registro realizado exitosamente'
            ]);
        }

        //este punto, indica que hubo error
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecheria $lecherium)
    {
        //
        $madre = Madre::first();

        // dd($madre->controles_lecheria);
        return view('ganado.bovino.lecheria.mostrar', [
            'modelo' => $lecherium,
            'vacas' => $lecherium->madres->filter(function ($item){
                return $item->ganado->tipo == 'bovino';
            })
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecheria $lecheria)
    {
        //
        return view('ganado.bovino.lecheria.editar', [
            'modelo' => $lecheria
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLecheriaRequest $request, Lecheria $lecheria)
    {
        //
        $lecheria->alias = $request->alias;
        $lecheria->tipo_alimento = $request->tipo_alimento;
        $lecheria->cant_meta = $request->cant_meta;
        $lecheria->observaciones = $request->observaciones;

        if($lecheria->save()){
            return redirect()->route('lecheria.index')->withInput([
                'status' => 'Datos guardados exitosamente'
            ]);
        }

        //este punto, indica que hubo error
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecheria $lecheria)
    {
        //
        $lecheria->delete();

        return redirect()->route('lecheria.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
