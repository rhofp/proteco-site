<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'nombre_imagen' => 'required|string',
            'nombre_temario' => 'required|string',
            'nivel' => 'required|string|max:1',
            'tipo' => 'required|string|max:1',
            'activo' => 'boolean',
            'num_horas' => 'required|integer',
            'precio_estudiante_unam' => 'required|numeric',
            'precio_estudiante_ext' => 'required|numeric',
            'precio_general' => 'required|numeric',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'semestre_id' => 'required|integer',
        ];
    }
}
