<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePagosRequest extends FormRequest
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

            'id_mes.required' => 'Por favor seleccione un mes',
            'id_mes.unique' => 'Este mes ya se encuentra facturado',
           
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
            'id_mes'=>'required|unique:pagos|min:1',
        ];
    }
}
