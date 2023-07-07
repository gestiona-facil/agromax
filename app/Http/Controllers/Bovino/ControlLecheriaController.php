<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Models\Madre;
use App\Models\ControlLecheria;
use App\Http\Requests\Bovino\StoreControlLecheriaRequest;
use Illuminate\Http\Request;

class ControlLecheriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Madre $madre)
    {
        //
        return view('ganado.bovino.control_lecheria.crear', [
            'madre' => $madre
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreControlLecheriaRequest $request, ControlLecheria $control)
    {
        //TODO: posible validacion local (fecha, id vaca) para no permitir doble registro
        $control->madre_id = $request->vaca;
        $control->cant_recolectada = $request->cant_recolectada;
        $control->fecha = $request->fecha;

        if($control->save()){
            return redirect()->route('lecheria.show', ['lecherium' => $control->madre->lecheria->id]);
        }

        //llegar a este punto indica error
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ControlLecheria $controlLecheria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ControlLecheria $controlLecheria)
    {
        //
        return view('ganado.bovino.control_lecheria.editar', ['modelo' => $controlLecheria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ControlLecheria $controlLecheria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ControlLecheria $controlLecheria)
    {
        //
    }
}
