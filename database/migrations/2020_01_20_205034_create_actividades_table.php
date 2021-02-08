<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id('id_actividad')->unsigned();
            $table->string('nom_actividad',45);
            $table->string('tipo_actividad',45);
            $table->Integer('ponderacion');
            $table->bigInteger('id_periodo')->unsigned();
            $table->bigInteger('id_docente')->unsigned();
            $table->bigInteger('id_asignatura')->unsigned();
            $table->bigInteger('id_curso')->unsigned();
            $table->timestamps();
            $table->foreign('id_periodo')->references('id_periodo')->on('periodos');
            $table->foreign('id_docente')->references('id_docente')->on('docentes');
            $table->foreign('id_asignatura')->references('id_asignatura')->on('asignaturas');
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
        Schema::dropIfExists('actividades');
    }
}
