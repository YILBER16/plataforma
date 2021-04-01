<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEstudiantesRequest extends FormRequest
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
            'id_estudiante.required' => 'Por favor digite el numero de documento',
            'id_estudiante.unique' => 'Esta identificación ya existe o se encuentra deshabilitada',
            'unique' => 'El :attribute ya existe o se encuentra deshabilitada',
            'nom_estudiante.required' => 'Por favor digite el nombre',
            'dir_estudiante.required' => 'Por favor digite la dirección',
            'tel_estudiante.required' => 'Por favor digite el telefono',
            'cor_estudiante.required' => 'Por favor digite el correo',
            'sexo.required' => 'Por favor seleccione el sexo',
            'id_pais.required' => 'El pais es obligatorio',
            'id_departamento.required' => 'El departamento es obligatorio',
            'id_ciudad.required' => 'La ciudad es obligaria',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
            'fecha_expedicion.required' => 'La fecha de expedición es obligatoria',
            'doc_salud.required' => 'Por favor adjunte el certificado de salud',
            'doc_simat.required' => 'Por favor adjunte una el certificado de simat',
            'doc_vacunacion.required' => 'Por favor adjunte el carnet de vacunación',
            
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
            'id_estudiante'=>'required|unique:estudiantes|min:1',
            'nom_estudiante'=>'required',
            'dir_estudiante'=>'required',
            'tel_estudiante'=>'required',
            'cor_estudiante'=>'required',
            'sexo'=>'required',
            'fecha_nacimiento'=>'required',
            'fecha_expedicion' => 'required',
            'id_pais' => 'required',
            'id_departamento' => 'required',
            'id_ciudad' => 'required',
            'doc_salud' => 'required',
            'doc_simat' => 'required',
            'doc_vacunacion' => 'required',
        ];
    }
}
