<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->id('id_periodo')->unsigned();
            $table->bigInteger('nom_periodo')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->bigInteger('id_anio_lectivo')->unsigned();
            $table->timestamps();
            $table->foreign('id_anio_lectivo')->references('id_anio_lectivo')->on('anio_lectivo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodos');
    }
}
