<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes_cursos', function (Blueprint $table) {
            $table->increments('id_estudiante_curso');
            $table->bigInteger('id_estudiante')->unsigned();
            $table->bigInteger('id_curso')->unsigned();

            $table->timestamps();

            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
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
        Schema::dropIfExists('estudiantes_cursos');
    }
}
