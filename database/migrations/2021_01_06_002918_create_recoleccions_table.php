<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecoleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recoleccions', function (Blueprint $table) {
          $table->id();
          $table->BigInteger('parcela_id')->unsigned();
          $table->foreign('parcela_id')->references('id')->on('parcelas');
          $table->date('fecha');
          $table->double('variedad_recolectada', 8, 2);
          $table->double('rendimiento', 8, 2);
          $table->string('destino_cosecha', 50);
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
        Schema::dropIfExists('recoleccions');
    }
}
