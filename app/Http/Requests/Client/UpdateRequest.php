<?php

namespace App\Http\Requests\Client;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'dni' => 'required|integer|max:8|unique:clients,dni' . $this->route('clients')->id,
            'adress' => 'nullable|string|max:255',
            'phone' => 'required|integer|max:10',
            'email' => 'nullable|string|max:255|unique:clients,email|email:rfc,dns' . $this->route('clients')->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es válido',
            'name.max' => 'Solo se permite 255 caracteres',

            'dni.required' => 'Este campo es requerido',
            'dni.integer' => 'El valor no es válido',
            'dni.max' => 'Solo se permite 8 caracteres',
            'dni.unique' => 'El valor ya existe',

            'adress.string' => 'El valor no es válido',
            'adress.max' => 'Solo se permite 255 caracteres',
        
            'phone.required' => 'Este campo es requerido',
            'phone.string' => 'El valor no es válido',
            'phone.max' => 'Solo se permite 10 caracteres',

            'email.string' => 'El valor no es válido',
            'email.max' => 'Solo se permite 255 caracteres',
            'email.unique' => 'El valor ya existe',
            'email.email' => 'No es un correo electrónico'            
        ];
    }
}
