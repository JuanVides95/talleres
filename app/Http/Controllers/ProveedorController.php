<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveedorRequest;
use App\Models\Proveedor;

class ProveedorController extends Controller
{

    public function index()
    {
        return csrf_token();
    }
   
    public function store(ProveedorRequest $request)
    {

        $proveedor = Proveedor::create($request->all());
        return $proveedor;

    }
}
