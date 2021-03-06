<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAcudientesRequest extends FormRequest
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
            'id_acudiente.unique' => 'Esta identificacion ya existe',
            'unique' => 'El :attribute ya existe',
            'nom_acudiente.required' => 'El nombre es obligatorio',
            'dir_acudiente.required' => 'La direccion es obligatoria',
            'tel_acudiente.required' => 'El telefono es obligatorio',
            'cor_acudiente.required' => 'El correo es obligatorio',

            
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
            'nom_acudiente'=>'required',
            'dir_acudiente'=>'required',
            'tel_acudiente'=>'required',
            'cor_acudiente'=>'required',
       
        ];
    }
}
