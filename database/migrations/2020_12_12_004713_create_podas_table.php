<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('parcela_id')->unsigned();
            $table->foreign('parcela_id')->references('id')->on('parcelas');
            $table->date('fecha');
            $table->string('practica_realizada', 50);
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
        Schema::dropIfExists('podas');
    }
}
