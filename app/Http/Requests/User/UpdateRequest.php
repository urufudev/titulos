<?php

namespace App\Http\Requests\User;

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
            'name' =>'required',
            'ap_paterno' =>'required',
            'ap_materno' =>'required',
            'email' =>'required',
            
            'dni' => ['numeric','digits:8','required', Rule::unique('users', 'dni')->ignore($this->route('user'))],

        ];
    }

    public function attributes()
    {
    return [
    
        'name' => 'Nombre',
        'ap_paterno' => 'Apellido Paterno',
        'ap_materno' => 'Apellido Materno',
        'email' => 'Correo',
        'password' => 'Contraseña',
        'dni' => 'DNI',

        ];
    }
}
