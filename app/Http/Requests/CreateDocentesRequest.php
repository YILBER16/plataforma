<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDocentesRequest extends FormRequest
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
            'id_docente.required' => 'La cedula es obligatoria',
            'id_docente.unique' => 'Esta identificación ya existe o se encuentra deshabilitada',
            'unique' => 'El :attribute ya existe o se encuentra deshabilitada',
            'nom_docente.required' => 'El nombre es obligatorio',
            'dir_docente.required' => 'La dirección es obligatoria',
            'tel_docente.required' => 'El telefono es obligatorio',
            'cor_docente.required' => 'El correo es obligatorio',
            'nivel_academico.required' => 'El nivel academico es obligatorio',
            'doc_documento.required' => 'Por favor adjunte el documento de identidad',
            'hoja_de_vida.required' => 'Por favor adjunte la hoja de vida',
            
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
            'id_docente'=>'required|unique:docentes|min:1',
            'nom_docente'=>'required',
            'dir_docente'=>'required',
            'tel_docente'=>'required',
            'cor_docente'=>'required',
            'nivel_academico'=>'required',
            'doc_documento' => 'required|mimes:pdf',
            'hoja_de_vida' => 'required|mimes:pdf'
        ];
    }
}
