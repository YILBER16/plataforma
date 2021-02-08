<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meses', function (Blueprint $table) {
            $table->id('id_mes');
            $table->string('nom_mes',20);
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
        Schema::dropIfExists('meses');
    }
}
