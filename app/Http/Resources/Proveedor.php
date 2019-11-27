<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Proveedor extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'telefono' => $this->telefono,
            'detalles' => $this->detalles,
        ];
    }
}
