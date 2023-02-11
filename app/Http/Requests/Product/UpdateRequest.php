<?php

namespace App\Http\Requests\Product;

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
            'name' => 'required|string|max:255|unique:products,name' . $this->route('product')->id,
            'code' => 'string|max:250|nullable|unique:products,code' . $this->route('product')->id ,
            'stock' => 'integer',
            'image' => 'nullable',
            'sell_price' => 'required',
            'category_id' => 'required|integer',
            'provider_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es válido',
            'name.max' => 'Solo se permiten 255 caracteres',
            'name.unique' => 'El producto ya fue ingresado',

            'code.string' => 'El valor no es válido',
            'code.max' => 'Solo se permite 250 caracteres',
            'code.unique' => 'El código ya está en uso',

            'stock.required' => 'Este campo es requerido',
            'stock.integer' => 'El valor no es válido',

            'iamge.dimensions' => 'La dimension de la imagen no es correcta',
             
            'sell_price.required' => 'Este campo es requerido',

            'provider_id.integer' => 'El valor tiene que ser entero',
            'provider_id.required' => 'El campo es requerido',
            'provider_id.exists' => 'La categoria no existe',

            'category_id.integer' => 'El valor tiene que ser entero',
            'category_id.required' => 'El campo es requerido',
            'category_id.exists' => 'La categoria no existe'
        ];
    }
}
