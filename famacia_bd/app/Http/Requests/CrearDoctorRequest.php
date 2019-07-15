<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearDoctorRequest extends FormRequest
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
        'nombre'=>'required|min:2|max:60|required|alpha',
        'apellido'=>'required|min:2|max:60|required|alpha',
        'cedula'=>'required|min:8|required|numeric',
        'Licencia'=>'required|min:8|required|numeric',
        'categoria_id'=>'required',
        'telefono'=>'required|min:7|required|numeric',
        ];
    }
}
