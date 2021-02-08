<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('id_matricula')->unsigned();
            $table->bigInteger('id_estudiante')->unsigned();
            $table->bigInteger('id_grado')->unsigned();
            $table->bigInteger('id_anio_lectivo')->unsigned();
            $table->double('valor_matricula', 8, 2);
            $table->timestamps();

            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
            $table->foreign('id_grado')->references('id_grado')->on('grados');
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
        Schema::dropIfExists('matriculas');
    }
}
