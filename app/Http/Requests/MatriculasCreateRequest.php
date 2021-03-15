<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatriculasCreateRequest extends FormRequest
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
            'id_estudiante.unique' => 'Esta estudiante ya se encuentra matriculado',
            'unique' => 'El :attribute ya existe',
            'id_grado.required' => 'Por favor seleccione el grado del estudiante',
            'id_acudiente.required' => 'Por favor seleccione el acudiente del estudiante',
            'id_padre.required' => 'Por favor seleccione el padre del estudiante',
            'id_madre.required' => 'Por favor seleccione la madre del estudiante',
            'valor_matricula.required' => 'Por favor digité el valor de la matricula',
            'doc_foto.required' => 'Por favor adjunte una fotografia',
            'doc_documento.required' => 'Por favor adjunte un documento de identidad',
            'doc_paz_salvo.required' => 'Por favor adjunte un documento de paz y salvo',
            'doc_boletin.required' => 'Por favor adjunte el boletin del estudiante',
            
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
            'id_grado'=>'required',
            'id_acudiente'=>'required',
            'id_padre'=>'required',
            'id_madre'=>'required',
            'valor_matricula'=>'required',
            'doc_foto' => 'required',
            'doc_documento' => 'required|mimes:pdf',
            'doc_paz_salvo' => 'required|mimes:pdf',
            'doc_boletin' => 'required|mimes:pdf',
           
        ];
    }
}
