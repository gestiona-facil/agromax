<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GanadoController;
use App\Models\Madre;
use App\Models\Cria;
use App\Models\Ganado;
use App\Http\Requests\Bovino\StoreCriaRequest;
use App\Http\Requests\Bovino\UpdateCriaRequest;
use Illuminate\Http\Request;

class CriaController extends Controller
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
        return view('ganado.bovino.levante.lista', [
            'datos' => Cria::paginate(25)
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

        return view('ganado.bovino.levante.crear', [
            'madres' => $madres,
            'padres' => collect([])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCriaRequest $request, Cria $crium)
    {
        //
        $ganado = $this->base->store($request, new Ganado());

        if($ganado->id){
            $crium->ganado_id = $ganado->id;

            $crium->tiempo_destete = $request->tiempo_destete;
            $crium->alias = $request->alias;
            $crium->destetado =  $request->has('destetado') ? 1 : 0;

            if($crium->save()){
                return redirect()->route('cria.show', ['crium' => $crium->id]);
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
    public function show(Cria $crium)
    {
        //
        return view('ganado.bovino.levante.mostrar', [
            'modelo' => $crium
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cria $crium)
    {
        //
        return view('ganado.bovino.levante.editar', [
            'madres' => Madre::join('ganados', 'madres.ganado_id', '=', 'ganados.id')
                        ->where('ganados.tipo', '=', 'bovino')
                        ->select('madres.*')
                        ->get(),
            'padres' => collect(),
            'modelo' => $crium
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCriaRequest $request, Cria $crium)
    {
        //
        $ganado = $this->base->update($request, $crium->ganado);

        $crium->alias = $request->alias;
        $crium->destetado =  $request->has('destetado') ? 1 : 0;

        if($crium->save()){
            return redirect()->route('cria.show', ['crium' => $crium->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cria $crium)
    {
        //
        $crium->ganado->delete();
        $crium->delete();

        return redirect()->route('cria.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
