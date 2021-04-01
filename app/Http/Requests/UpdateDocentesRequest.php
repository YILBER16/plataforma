<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocentesRequest extends FormRequest
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
            'tipo_documento.required' => 'Por favor elija un tipo de documento',
            'id_docente.unique' => 'Esta identificacion ya existe',
            'unique' => 'El :attribute ya existe',
            'nom_docente.required' => 'El nombre es obligatorio',
            'dir_docente.required' => 'La dirección es obligatoria',
            'tel_docente.required' => 'El telefono es obligatorio',
            'cor_docente.required' => 'El correo es obligatorio',
            'nivel_academico.required' => 'El nivel academico es obligatorio',

            
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
            'tipo_documento'=>'required',
            'nom_docente'=>'required',
            'dir_docente'=>'required',
            'tel_docente'=>'required',
            'cor_docente'=>'required',
            'nivel_academico'=>'required',
       
        ];
    }
}
