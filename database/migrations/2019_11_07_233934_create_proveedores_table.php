<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('telefono');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
