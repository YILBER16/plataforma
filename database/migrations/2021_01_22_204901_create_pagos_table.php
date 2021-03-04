<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
           $table->bigInteger('id_mes')->unsigned();
            $table->bigInteger('id_matricula')->unsigned();
            $table->bigInteger('valor_pago');
            $table->bigInteger('saldo');
            $table->bigInteger('estado');
            $table->timestamps();
            $table->foreign('id_mes')->references('id_mes')->on('meses');
            $table->foreign('id_matricula')->references('id_matricula')->on('matriculas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
