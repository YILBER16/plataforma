<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observadores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_estudiante')->unsigned();
            $table->string('clase_falta', 20);
            $table->bigInteger('id_item_observador')->unsigned()->nullable();
            $table->string('descripcion_falta', 600);
            $table->timestamps();
            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
            $table->foreign('id_item_observador')->references('id')->on('item_observadores');
        });
        Artisan::call('db:seed', [
            '--class' => DatosSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observadores');
    }
}
