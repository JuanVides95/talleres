<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'fecha' => 'required|date',
            'total' => 'required|min:3|integer',
            'proveedor_id' => 'required|integer',
        ];
    }

    public function attributes()
    {
        return [
            'descripcion' => 'Descripcion',
            'precio' => 'Precio Unitario',
            'proveedor_id' => 'Codigo Proveedor',
            'categoria' => 'Categoria'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El atributo :attribute es requerido.',
            'date' => 'El atributo :attribute tiene fecha invalida.',
            'max' => 'El atributo :attribute debe tener maximo :max caracteres.',
            'min' =>  'El atributo :attribute debe tener como minimo :min caracteres.',
            'integer' => 'El atributo :attribute debe ser númerico.',
            'string' => 'El atributo :attribute debe ser un texto.',
        ];
    }
}
