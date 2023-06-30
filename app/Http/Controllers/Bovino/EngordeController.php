<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GanadoController;
use App\Models\Engorde;
use App\Models\Madre;
use App\Models\Ganado;
use App\Http\Requests\Bovino\StoreEngordeRequest;
use App\Http\Requests\Bovino\UpdateEngordeRequest;
use Illuminate\Http\Request;

class EngordeController extends Controller
{
    private $base;

    public function __construct(GanadoController $ganado)
    {
        $this->base = $ganado;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('ganado.bovino.engorde.lista', [
            'datos' => Engorde::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ganado.bovino.engorde.crear', [
            'madres' => Madre::join('ganados', 'madres.ganado_id', '=', 'ganados.id')
                ->where('ganados.tipo', '=', 'bovino')
                ->select('madres.*')
                ->get(),
            'padres' => collect([])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEngordeRequest $request, Engorde $engorde)
    {
        //
        $ganado = $this->base->store($request, new Ganado());

        if($ganado->id){
            $engorde->ganado_id = $ganado->id;

            $engorde->tipo_alimento = $request->tipo_alimento;
            $engorde->cant_total_alimento = $request->cant_total_alimento;
            $engorde->duracion =  $request->duracion;
            $engorde->peso_inicial = $request->peso_inicial;
            $engorde->peso_final = $request->peso_final;

            if($engorde->save()){
                return redirect()->route('engorde.show', ['engorde' => $engorde->id]);
            }
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible realizar el registro'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Engorde $engorde)
    {
        //
        return view('ganado.bovino.engorde.mostrar', [
            'modelo' => $engorde
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Engorde $engorde)
    {
        //
        return view('ganado.bovino.engorde.editar', [
            'madres' => Madre::join('ganados', 'madres.ganado_id', '=', 'ganados.id')
                ->where('ganados.tipo', '=', 'bovino')
                ->select('madres.*')
                ->get(),
            'padres' => collect([]),
            'modelo' => $engorde
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Engorde $engorde)
    {
        $ganado = $this->base->update($request, $engorde->ganado);

        $engorde->tipo_alimento = $request->tipo_alimento;
        $engorde->cant_total_alimento = $request->cant_total_alimento;
        $engorde->duracion =  $request->duracion;
        $engorde->peso_inicial = $request->peso_inicial;
        $engorde->peso_final = $request->peso_final;

        if($engorde->save()){
            return redirect()->route('engorde.mostrar', ['engorde' => $engorde->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Engorde $engorde)
    {
        //
        $engorde->ganado->delete();
        $engorde->delete();

        return redirect()->route('engorde.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
