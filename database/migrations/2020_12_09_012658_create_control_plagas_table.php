<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlPlagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_plagas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('parcela_id')->unsigned();
            $table->foreign('parcela_id')->references('id')->on('parcelas');
            $table->date('fecha');
            $table->string('nombre_comercial',30 );
            $table->double('materia_activa', 8, 2);
            $table->string('forma_aplicacion', 50);
            $table->double('gasto_producto', 8, 2);
            $table->string('control_HP', 30);
            $table->integer('no_tratamiento');
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
        Schema::dropIfExists('control_plagas');
    }
}
