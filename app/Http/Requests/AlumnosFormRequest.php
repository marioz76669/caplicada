<?php

namespace caplicada\Http\Requests;

use caplicada\Http\Requests\Request;

class AlumnosFormRequest extends Request
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
            'apellido'=>'required|max:100',
            'nombre'=>'required|max:100',
            'email'=>'required|max:25',
            'altura'=>'required|numeric',
        ];
    }
}
