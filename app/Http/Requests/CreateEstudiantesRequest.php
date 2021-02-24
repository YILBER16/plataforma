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

            'id_estudiante.required' => 'La cedula es obligatoria',
            'id_estudiante.unique' => 'Esta identificación ya existe o se encuentra deshabilitada',
            'unique' => 'El :attribute ya existe o se encuentra deshabilitada',
            'nom_estudiante.required' => 'El nombre es obligatorio',
            'dir_estudiante.required' => 'La dirección es obligatoria',
            'tel_estudiante.required' => 'El telefono es obligatorio',
            'cor_estudiante.required' => 'El correo es obligatorio',
            'sexo.required' => 'El sexo es obligatorio',
            'id_pais.required' => 'El pais es obligatorio',
            'id_departamento.required' => 'El departamento es obligatorio',
            'id_ciudad.required' => 'La ciudad es obligaria',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
            'fecha_expedicion.required' => 'La fecha de expedición es obligatoria',
            
            
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
        ];
    }
}
