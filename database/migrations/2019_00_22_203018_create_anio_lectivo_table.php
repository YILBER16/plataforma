<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnioLectivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anio_lectivo', function (Blueprint $table) {
            $table->bigInteger('id_anio_lectivo')->unsigned();
            $table->primary('id_anio_lectivo');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('estado',10);
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
        Schema::dropIfExists('anio_lectivo');
    }
}
