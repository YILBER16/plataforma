<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMensualidadesRequest extends FormRequest
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
            'tipo_mensualidad'=>'required',
            'valor'=>'required',
        ];
    }
}
