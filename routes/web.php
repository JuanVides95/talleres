<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('proveedor', 'ProveedorController');

Route::resource('factura', 'FacturaController');

