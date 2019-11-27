<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacturaRequest;
use App\Models\Factura;

class FacturaController extends Controller
{

    public function store(FacturaRequest $request)
    {

        $factura = Factura::create($request->all());
        return $factura;  
    }
   

}
