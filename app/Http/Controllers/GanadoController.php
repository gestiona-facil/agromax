<?php

namespace App\Http\Controllers;

use App\Models\Ganado;
use Illuminate\Foundation\Http\FormRequest as Request;

/**
 * Esta clase es "especial" debe servir de base (por composición) a otros controladores.
 * Por lo tanto, no debe ser usando en rutas, sino más bien, debe ser heredada
 * por otros controladores
 */
class GanadoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Ganado $ganado)
    {
        //validacion local

        if($request->has('madre')){
            $ganado->madre_id = $request->madre;
        }

        if($request->has('padre')){
            $ganado->padre_id = $request->padre;
        }

        $ganado->identificacion = $request->identificacion;
        $ganado->tipo = $request->tipo;
        $ganado->raza = $request->raza;
        $ganado->fecha_nacimiento = $request->fecha_nacimiento;
        $ganado->sexo = $request->has('sexo') ? 1 : 0;
        $ganado->save();

        return $ganado;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ganado $ganado)
    {
        //
        return $this->store($request, $ganado);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ganado $ganado)
    {
        //
        return $ganado->delete();
    }
}
