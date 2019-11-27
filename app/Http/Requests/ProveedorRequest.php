<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\AtributoMayuscula;

class ProveedorRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => ['required','min:3','max:255', new AtributoMayuscula],
            'telefono' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'telefono' => 'Numero Contacto',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El atributo :attribute es requerido.',
            'max' => 'El atributo :attribute debe tener maximo :max caracteres.',
            'min' =>  'El atributo :attribute debe tener como minimo :min caracteres.',
            'integer' => 'El atributo :attribute debe ser númerico.',
        ];
    }


}
