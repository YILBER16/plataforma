<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGradosRequest extends FormRequest
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
    public function messages()
    {
        return [

            'nom_grado.required' => 'El nombre del grado es obligatorio',
            'jornada.required' => 'La jornada es obligatoria',
            'id_mensualidad.required' => 'La mensualidad es obligatoria',
           
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom_grado'=>'required',
            'jornada'=>'required',
            'id_mensualidad'=>'required',
        ];
    }
}
