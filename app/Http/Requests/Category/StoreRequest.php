<?php

namespace App\Http\Requests\Category;

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
            'name' => 'required|string|max:50|unique:categories',
            'description' => 'nullable|string|max:250'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre de la categoria es requerido',
            'name.unique' => 'La categoria ingresada ya existe',
            'name.string' => 'El valor de la categoria no es válido',
            'name.max' => 'Solo se permite 50 caracteres ',
            'description.string' => 'El valor no es válido',
            'description.max' => 'Solo se permite 250 caracteres',
        ];
    }
}
