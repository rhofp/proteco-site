<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GrupoResource extends JsonResource
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
            //'grupo_id' => $this->grupo_id,
            'turno' => $this->turno,
            'hora_inicio' => $this->hora_inicio,
            'hora_fin' => $this->hora_fin,
            'dias' => $this->dias,
            'num_inscritos' => $this->num_inscritos,
            'cupo_maximo' => $this->cupo_maximo,
            'lugar' => new LugarResource($this->lugar)
        ];
    }
}
