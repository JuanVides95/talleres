<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    protected $fillable = [
        'fecha',
        'total',
        'proveedor_id',
    ];

    public function detalles()
    {
        return $this->hasMany('App\Models\Detalle');
    }

    public function proveedor()
    {
        return $this->belongsTo('App\Models\Proveedor');
    }

}
