<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Requests\GrupoRequest;
use App\Http\Resources\GrupoResource;
use App\Models\Curso;
use App\Models\Grupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function index(Curso $curso)
    {
        $response = [
            'success' => true,
            'message' => 'Los grupos del curso son',
            'data' => GrupoResource::collection($curso->grupos)
        ];

        return response()->json($response,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoRequest $request, Curso $curso)
    {
        $grupo = new Grupo($request->all());
        $curso->grupos()->save($grupo);
        $response = [
            'success' => true,
            'message' => 'Grupo Guardado',
            'data' => new GrupoResource($grupo)
        ];
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    //public function show(Curso $curso, Grupo $grupo)
    public function show(Grupo $grupo)
    {
        $response = [
            'success' => true,
            'message' => 'Información recuperada',
            'data' => new GrupoResource($grupo)
        ];
        return response()->json($response,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    //public function update(GrupoRequest $request, Curso $curso,Grupo $grupo)
    public function update(GrupoRequest $request, Grupo $grupo)
    {
        $grupo->update($request->all());
        $response = [
            'success' => true,
            'message' => 'Información actualizada',
            'data' => new GrupoResource($grupo)
        ];
        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso, Grupo $grupo)
    {
        $grupo->delete();
        $response = [
            'success' => true,
            'message' => 'El grupo fue eliminado con exito',
            'data' => []
        ];
        return response()->json($response,200);
    }
}
