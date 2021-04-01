<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePadresRequest extends FormRequest
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
            'nom_padre.required' => 'El nombre es obligatorio',
            'ocu_padre.required' => 'La ocupacion es obligatoria',
            'parentesco.required' => 'El parentesco es obligatorio',
            'dir_padre.required' => 'La direccion es obligatoria',
            'tel_padre.required' => 'El telefono es obligatorio',

            
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
            'nom_padre'=>'required',
            'ocu_padre'=>'required',
            'parentesco'=>'required',
            'dir_padre'=>'required',
            'tel_padre'=>'required',
       
        ];
    }
}
