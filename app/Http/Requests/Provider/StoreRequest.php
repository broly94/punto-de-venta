<?php

namespace App\Http\Requests\Provider;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:200',
            'email' => 'nullable|email|string|max:250|unique:providers',
            'cuil_number' => 'nullable|string|max:11|unique:providers',
            'adress' => 'nullable|string|max:255|unique:providers',
            'phone' => 'nullable|string|max:15|unique:providers'
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es válido',
            'name.max' => 'Solo se permiten 200 caracteres',


            'email.required' => 'Este campo es requerido',
            'email.email' => 'No es un correo electrónico',
            'email.string' => 'El valor no es válido',
            'email.max' => 'Solo se permite 250 caracteres',
            'email.unique' => 'El email ya está en uso',

            'cuil_number.required' => 'Este campo es requerido',
            'cuil_number.string' => 'El valor no es válido',
            'cuil_number.max' => 'Solo se permiten 50 caracteres',
            'cuil_number.unique' => 'El cuil ya está en uso',

            'adress.string' => 'El valor no es válido',
            'adress.max' => 'Solo se permiten 255 caracteres',
            'adress.unique' => 'La dirección ya esta en uso',
             
            'phone.required' => 'Este campo es requerido',
            'phone.string' => 'El valor no es válido',
            'phone.max' => 'Solo se permiten 9 caracteres',
            'phone.unique' => 'El teléfono ya esta en uso',
             
        ];
    }
}
