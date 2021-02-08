<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesAsignaturasCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes_asignaturas_cursos', function (Blueprint $table) {
            $table->increments('id_docente_asignatura_curso');
            $table->bigInteger('id_docente')->unsigned();
            $table->bigInteger('id_asignatura')->unsigned();
            $table->bigInteger('id_curso')->unsigned();
            $table->timestamps();
            $table->foreign('id_asignatura')->references('id_asignatura')->on('asignaturas');
            $table->foreign('id_docente')->references('id_docente')->on('docentes');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes_asignaturas_cursos');
    }
}
