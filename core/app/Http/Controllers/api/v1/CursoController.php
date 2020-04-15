<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Requests\CursoRequest;
use App\Http\Resources\CursoResource;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = [
            "success" => true,
            "message" => "Cursos recuperados con éxito",
            "data" => CursoResource::collection(Curso::all())
        ];
        return  response()->json($response,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {
        $curso = Curso::create($request->all());
        $response = [
            'success' => true,
            'message' => 'El curso fue guardado con éxito',
            'data'=> new CursoResource($curso)
        ];

        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        $response = [
            'success' => true,
            'message' => "El curso ".$curso->curso_id."fue recuperado con éxito",
            'data' => new CursoResource($curso),
        ];
        return response()->json($response,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     * Es preferible requerir todos los campos en la actualización dado que son pocos
     * a que mandemos campos incorrectos. Ya que update no marca si esta bien o mal.
     */
    public function update(CursoRequest $request, Curso $curso)
    {
        $curso->update($request->all());
        $response = [
            'success' => true,
            'message' => "Curso actualizado",
            'data' => new CursoResource($curso)
        ];

        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Curso $curso
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        $response = [
            'success' => true,
            'message' => 'El curso fue eliminado',
            'data' => [],
        ];
        return response($response,201);

    }
}
