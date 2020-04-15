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
            'nivel' => $this->nivel,
            'horas' => $this->horas,
            'semestre' => $this->semestre,
            'precio_estdiante_unam' => $this->precio_estudiante_unam,
            'precio_estudiante_ext' => $this->precio_estudiante_ext,
            'grupos' => GrupoResource::collection($this->grupos)
        ];
    }
}
