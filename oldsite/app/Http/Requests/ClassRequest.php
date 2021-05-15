<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClassRequest extends Request
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
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'startTime' => 'required',
            'endTime' => 'required',
            'days' => 'required|array',
            'maxQuota' => 'required|',
            'cost1' => 'required|integer',
            'cost2' => 'required|integer',
            'cost3' => 'required|integer',
            'semester_id' => 'required|integer',
            'course_id' => 'required|integer',
            'place_id' => 'required|integer',
            'type_id' => 'required|integer',
        ];
    }
}
