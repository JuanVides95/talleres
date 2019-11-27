<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    
    protected $fillable = [
        'name',
        'telefono'
    ];
    
    public function proveedor() 
    {
        return $this->belongsTo('App\Models\Proveedor');
    }

    public function detalles()
    {
        return $this->hasManyThrough('App\Models\Detalle', 'App\Models\Factura');
    }

    
}
