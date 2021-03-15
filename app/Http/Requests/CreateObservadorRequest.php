<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateObservadorRequest extends FormRequest
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

            'id_estudiante.required' => 'Por favor seleccione un estudiante',
            'clase_falta.required' => 'Por favor seleccione la clase de falta cometida',
            'categoria_falta.required_if' => 'Por favor seleccione la categoria de la falta disciplinaria',
            'tipo_falta.required_if' => 'Por favor seleccione el tipo de la falta disciplinaria',
            'descripcion_falta.required' => 'Por favor describa la falta cometida',
            
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
            'id_estudiante'=>'required',
            'clase_falta'=>'required',
            'categoria_falta'=>'required_if:clase_falta,Disciplinaria',
            'tipo_falta'=>'required_if:clase_falta,Disciplinaria',
            'descripcion_falta'=>'required',
            
        ];
        
        
        
    }
}
