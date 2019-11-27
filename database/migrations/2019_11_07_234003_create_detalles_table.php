<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
   
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->integer('costo');
            $table->integer('factura_id')->unsigned();
            $table->foreign('factura_id')
            ->references('id')
            ->on('facturas')
            ->onDelete('cascade')
            ->onUpdate('cascade');    
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('caracteristicas');
    }
}
