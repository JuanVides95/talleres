<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Factura extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'fecha' => $this->fecha,
            'total' => $this->total,
            'proveedor_id' => new Proveedor($this->proveedor),
        ];
    }
}
