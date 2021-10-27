<?php

namespace App\Http\Requests\Institute;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'modular' =>'numeric|digits:7|required|unique:institutes,modular',
            'name' =>'required',
            'local' =>'numeric|digits:6|required',
            'address' =>'required',
            'type' =>'required'

        ];
    }

    public function attributes()
    {
    return [
    
        'modular' => 'Cod. Modular',
        'name' => 'Nombre',
        'local' => 'Cod. Local',
        'address' => 'Dirección',
        'type' => 'Tipo'
        ];
    }
}
