<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->string('paraje', 20);
            $table->double('superficie_HA', 8, 2);
            $table->string('poligono', 30);
            $table->double('parcela_recinto', 8, 2);
            $table->string('variedad', 30);
            $table->string('patron', 30);
            $table->string('proveedor_MV', 30);
            $table->date('fecha_plantio');
            $table->string('marco_plantio', 30);
            $table->string('cultivo_anterior', 30);
            $table->string('sistema_formacion', 30);
            $table->boolean('cubierta_vegetal'); //Duda
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
        Schema::dropIfExists('parcelas');
    }
}
