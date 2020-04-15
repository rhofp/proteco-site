<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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
            'turno' => 'required|string',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'num_inscritos' => 'required',
            'dias' => 'required',
            'cupo_maximo' => 'required|integer',
            'lugar_id' => 'required'
        ];
    }
}
