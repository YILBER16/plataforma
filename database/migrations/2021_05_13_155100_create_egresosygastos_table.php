<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresosygastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresosygastos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_salida');
            $table->string('clase_salida', 30);
            $table->string('concepto_salida', 30);
            $table->bigInteger('cc_pagado')->nullable();
            $table->string('nom_pagado',150)->nullable();
            $table->string('tipo_salida', 30);
            $table->bigInteger('valor_salida');
            $table->string('descripcion_salida',300);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresosygastos');
    }
}
