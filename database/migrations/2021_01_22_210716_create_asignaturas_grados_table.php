<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturasGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas_grados', function (Blueprint $table) {
            $table->increments('id_asignatura_grado');
            $table->bigInteger('id_asignatura')->unsigned();
            $table->bigInteger('id_grado')->unsigned();
            $table->timestamps();
            $table->foreign('id_asignatura')->references('id_asignatura')->on('asignaturas');
            $table->foreign('id_grado')->references('id_grado')->on('grados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaturas_grados');
    }
}
