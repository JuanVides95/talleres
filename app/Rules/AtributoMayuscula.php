<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AtributoMayuscula implements Rule
{
    
    public function passes($attribute, $value)
    {
        return strtoupper($value)  === $value;
    }

    
    public function message()
    {
        return 'El/La :attribute debe estar en mayuscula.';
    }
}
