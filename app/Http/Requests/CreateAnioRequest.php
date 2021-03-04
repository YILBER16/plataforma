<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnioRequest extends FormRequest
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

            'id_anio_lectivo.required' => 'Por favor seleccione el año a registrar',
            'id_anio_lectivo.unique' => 'Este año ya se encuentra registrado',
            'fecha_inicio.required' => 'Seleccione una fecha de inicio',
            'fecha_fin.required' => 'Seleccione una fecha de finalización',
           
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
            'id_anio_lectivo'=>'required|unique:anio_lectivo|min:1',
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required',
        ];
    }
}
