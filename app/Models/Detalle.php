<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'detalles';
    
    protected $fillable = [
        'descripcion',
        'cantidad',
        'costo',
        'factura_id',
    ];
    
    public function factura()
    {
        return $this->belongsTo('App\Models\Factura');
    }
}