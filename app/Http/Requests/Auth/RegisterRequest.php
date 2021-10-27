<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'ap_paterno' => 'required|string|max:255',
            'ap_materno' => 'required|string|max:255',
            'dni' => 'required|min:8|numeric|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',

        ];
    }

    public function attributes()
    {
    return [
    
        'name' => 'Nombre',
        'ap_paterno' => 'Apellido Paterno',
        'ap_materno' => 'Apellido Materno',
        'dni' => 'DNI',
        'email' => 'Correo Electronico',
        'password' => 'Contraseña',

        ];
    }
}
