<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemObservadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_observadores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_falta')->unsigned();
            $table->string('tipo_falta', 120);
            $table->timestamps();
            $table->foreign('categoria_falta')->references('id')->on('categoria_itemobservadores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_observadores');
    }
}
