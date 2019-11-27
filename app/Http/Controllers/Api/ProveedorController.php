<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Proveedor as ProveedorResource;
use App\Http\Resources\Factura as FacturaResource;
use App\Models\Proveedor;
use App\Models\Factura;


class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return ProveedorResource::collection($proveedores);
    }

    public function show($id)
    {
        $factura = Factura::find($id);
        return new FacturaResource($factura);
    }
}
