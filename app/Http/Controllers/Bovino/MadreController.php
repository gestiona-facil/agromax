<?php

namespace App\Http\Controllers\Bovino;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GanadoController;
use App\Models\Madre;
use App\Models\Ganado;
use App\Models\Reproductor;
use App\Models\Lecheria;
use App\Http\Requests\Bovino\StoreMadreRequest;
use App\Http\Requests\Bovino\UpdateMadreRequest;

class MadreController extends Controller
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
        return view('ganado.bovino.vaca.lista', [
            'datos' => Madre::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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

        $lecherias = Lecheria::all()->map(function ($item){
            return [
                'label' => $item->alias,
                'value' => $item->id
            ];
        });
        
        return view('ganado.bovino.vaca.crear', [
            'madres' => $madres,
            'padres' => collect([]),
            'lecherias' => $lecherias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMadreRequest $request, Madre $madre)
    {
        //
        $ganado = $this->base->store($request, new Ganado());

        if($ganado->id){
            $madre->ganado_id = $ganado->id;

            if($request->has('lecheria')){
                $madre->lecheria_id = $request->lecheria;
            }

            $madre->alias = $request->alias;
            $madre->tiempo_parto = $request->tiempo_parto;
            $madre->gestando =  $request->has('fecha_inicio_gestacion');

            if($request->has('fecha_inicio_gestacion')){
                $madre->fecha_inicio_gestacion = $request->fecha_inicio_gestacion;
            }

            if($madre->save()){
                return redirect()->route('vaca.show', ['vaca' => $madre->id]);
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
    public function show(Madre $madre)
    {
        //
        return view('ganado.bovino.vaca.mostrar', [
            'modelo' => $madre
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Madre $madre)
    {
        //
        $madres = Madre::join('ganados', 'madres.ganado_id', '=', 'ganados.id')
                    ->where('ganados.tipo', '=', 'bovino')
                    ->where('madres.id', '!=', $madre->id)
                    ->select('madres.*')
                    ->get()->map(function ($item) use($madre){
                        return $madre->madre_id == $item->id ? [
                            'label' => $item->alias,
                            'value' => $item->id,
                            'selected' => true
                        ] : [
                            'label' => $item->alias,
                            'value' => $item->id
                        ];
                    });

        $lecherias = Lecheria::all()->map(function ($item) use($madre){
            // return ['lecheria' => $madre->lecheria_id, 'item' => $item->id];
            return $madre->lecheria_id == $item->id ? [
                'label' => $item->alias,
                'value' => $item->id,
                'selected' => true
            ] : [
                'label' => $item->alias,
                'value' => $item->id
            ];
        });

        // dd($lecherias);

        return view('ganado.bovino.vaca.editar', [
            'madres' => $madres,
            'padres' => collect(),
            'lecherias' => $lecherias,
            'modelo' => $madre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMadreRequest $request, Madre $madre)
    {
        //
        $ganado = $this->base->update($request, $madre->ganado);

        if($request->has('lecheria')){
            $madre->lecheria_id = $request->lecheria;
        }

        $madre->alias = $request->alias;
        $madre->tiempo_parto = $request->tiempo_parto;
        $madre->gestando =  $request->has('fecha_inicio_gestacion');

        if($madre->save()){
            return redirect()->route('vaca.show', ['vaca' => $madre->id]);
        }

        //Error presente, si se alcanza este punto
        return back()->withErrors([
            'status' => 'No fue posible guardar los datos'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Madre $madre)
    {
        //
        $madre->ganado->delete();
        $madre->delete();

        return redirect()->route('vaca.index')->withInput([
            'status' => 'Registro eliminado exitosamente'
        ]);
    }
}
