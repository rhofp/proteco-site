<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CursoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'curso_id'=> $this->curso_id,
            'nombre' => $this->nombre,
            'nombre_imagen' => $this->nombre_imagen,
            'nombre_temario' => $this->nombre_temario,
            'nivel' => $this->nivel,
            'num_horas' => $this->num_horas,
            'precio_estudiante_unam' => $this->precio_estudiante_unam,
            'precio_estudiante_ext' => $this->precio_estudiante_ext,
            'precio_general' => $this->precio_general,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'semestre' => new SemestreResource($this->semestre),
            'grupos' => GrupoResource::collection($this->grupos)
        ];
    }
}
