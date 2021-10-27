<?php

namespace App\Http\Requests\Institute;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'modular' => ['required', Rule::unique('institutes', 'modular')->ignore($this->route('institute'))],
            'modular'=>'numeric|digits:7',
            'name' =>'required',
            'local' =>'numeric|digits:6|required',
            'address' =>'required',
            'type' =>'required'
        ];
    }

    public function attributes()
    {
        return [
    
            'moudlar' => 'Cod. Modular',
            'name' => 'Nombre',
            'local' => 'Cod. Local',
            'address' => 'Dirección',
            'type' => 'Tipo'
            ];
    }
}
