<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePadresRequest extends FormRequest
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

            'id_padre.required' => 'La cedula es obligatoria',
            'id_padre.unique' => 'Esta identificacion ya existe o se encuentra deshabilitada',
            'unique' => 'El :attribute ya existe o se encuentra deshabilitada',
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
            'id_padre'=>'required|unique:padres|min:1',
            'nom_padre'=>'required',
            'ocu_padre'=>'required',
            'parentesco'=>'required',
            'dir_padre'=>'required',
            'tel_padre'=>'required',
        ];
    }
}
