<?php

namespace App\Http\Requests\Year;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('years', 'name')->ignore($this->route('year'))],

        ];
    }

    public function attributes()
    {
    return [
    
        'name' => 'Nombre',
        ];
    }
}
