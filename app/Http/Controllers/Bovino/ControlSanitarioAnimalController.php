<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Models\ControlSanitarioAnimal;
use App\Models\Ganado;
use App\Http\Requests\Bovino\StoreControlSanitarioRequest;
use Illuminate\Http\Request;

class ControlSanitarioAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Ganado $ganado)
    {
        //
        return view('ganado.bovino.control_sanitario.lista', [
            'ganado' => $ganado,
            'datos' => $ganado->controles_sanitario()->orderByDesc('created_at')->paginate(25)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Ganado $ganado)
    {
        //
        return view('ganado.bovino.control_sanitario.crear', ['ganado' => $ganado]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreControlSanitarioRequest $request, ControlSanitarioAnimal $control)
    {
        //
        $control->ganado_id = $request->ganado;
        $control->fecha = $request->fecha;
        $control->fecha_control_proximo = $request->fecha_control_proximo;
        $control->estado_salud = $request->has('estado_salud');
        if($request->has('observaciones')){
            $control->observaciones = $request->observaciones;
        }

        if($control->save()){
            return redirect($request->redirect)->withInput(['status' => 'Control Agregado exitosamente']);
        }

        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ControlSanitarioAnimal $controlSanitarioAnimal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ControlSanitarioAnimal $controlSanitarioAnimal)
    {
        //
        return view('ganado.bovino.control_sanitario.editar', ['modelo' => $controlSanitarioAnimal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ControlSanitarioAnimal $controlSanitarioAnimal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ControlSanitarioAnimal $controlSanitarioAnimal)
    {
        //
    }
}
