<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMensualidadesRequest extends FormRequest
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

            'tipo_mensualidad.required' => 'El tipo de mensualidad es obligatorio',
            'tipo_mensualidad.unique' => 'Este tipo de mensualidad ya se encuentra registrada',
            'valor.required' => 'El valor es obligatorio',
           
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
            'tipo_mensualidad'=>'required|unique:mensualidades|min:1',
            'valor'=>'required',
        ];
    }
}
