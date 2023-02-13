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
            'name' => 'required|string|max:50|unique:providers',
            'email' => 'nullable|email|string|max:250|unique:providers',
            'cuil_number' => 'nullable|string|max:11|unique:providers',
            'adress' => 'nullable|string|max:255|unique:providers',
            'phone' => 'nullable|string|max:15|unique:providers'
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El valor del nombre no es válido',
            'name.max' => 'El nombre solo permite 50 caracteres',
            'name.unique' => 'El nombre que intenta ingresar ya existe',

            'email.email' => 'Ingrese un correo electrónico válido',
            'email.string' => 'El valor del email no es válido',
            'email.max' => 'El email solo permite 250 caracteres',
            'email.unique' => 'El email que intenta ingresar ya existe',

            'cuil_number.string' => 'El valor del cuil no es válido',
            'cuil_number.max' => 'El cuil solo permite 11 caracteres. Ingrese solo numeros sin singnos',
            'cuil_number.unique' => 'El cuil que intenta ingresar ya existe',

            'adress.string' => 'El valor de la dirección no es válida',
            'adress.max' => 'La dirección solo permite 255 caracteres',
            'adress.unique' => 'La dirección que intenta ingresar ya existe',
             
            'phone.string' => 'El valor del teléfono no es válido',
            'phone.max' => 'El teléfono solo permite 15 numeros máximo',
            'phone.unique' => 'El teléfono que intenta ingresar ya existe',
             
        ];
    }
}
