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
            'nivel' => 'required|string',
            'nombre' => 'required|string',
            'horas' => 'required|string',
            'semestre' => 'required|string',
            'es_semestral' => 'required|boolean',
            'es_intersemestral' => 'required|boolean',
            'precio_estudiante_unam' => 'required',
            'precio_estudiante_ext' => 'required',
            'precio_general' => 'required',
            'fecha_inicio' => 'required|string',
            'fecha_fin' => 'required|string',
            'activo' => 'required'
        ];
    }
}
