<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatriculasUpdateRequest extends FormRequest
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

            'id_grado.required' => 'Por favor seleccione el grado del estudiante',
            'id_acudiente.required' => 'Por favor seleccione el acudiente del estudiante',
            'id_padre.required' => 'Por favor seleccione el padre del estudiante',
            'id_madre.required' => 'Por favor seleccione la madre del estudiante',
            'valor_matricula.required' => 'Por favor digité el valor de la matricula',

            
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
            'id_grado'=>'required',
            'id_acudiente'=>'required',
            'id_padre'=>'required',
            'id_madre'=>'required',
            'valor_matricula'=>'required',
        ];
    }
}
