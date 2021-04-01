<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAcudientesRequest extends FormRequest
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
            'id_acudiente.required' => 'Por favor digite el numero de documento',
            'id_acudiente.unique' => 'Esta identificacion ya existe o se encuentra deshabilitada',
            'unique' => 'El :attribute ya existe o se encuentra deshabilitada',
            'nom_acudiente.required' => 'El nombre es obligatorio',
            'dir_acudiente.required' => 'La direccion es obligatoria',
            'tel_acudiente.required' => 'El telefono es obligatorio',
            'cor_acudiente.required' => 'El correo es obligatorio',
            'doc_documento.required' => 'Por favor adjunte el documento de identidad',
            
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
            'id_acudiente'=>'required|unique:acudientes|min:1',
            'nom_acudiente'=>'required',
            'dir_acudiente'=>'required',
            'tel_acudiente'=>'required',
            'cor_acudiente'=>'required',
            'doc_documento' => 'required|mimes:pdf'
        ];
    }
}
