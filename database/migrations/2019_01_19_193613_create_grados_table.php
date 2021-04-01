<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grados', function (Blueprint $table) {
            $table->id('id_grado')->unsigned();
            $table->string('nom_grado', 30);
            $table->string('jornada', 20);
            $table->unsignedBigInteger('id_mensualidad');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_mensualidad')->references('id_mensualidad')->on('mensualidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grados');
    }
}
