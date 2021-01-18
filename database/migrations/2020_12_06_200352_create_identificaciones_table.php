<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('campana', 100);
            $table->string('titular_explotacion',200)->nullable($value = false);
            $table->string('direccion')->nullable($value =false);
            $table->string('telefono',10);

            $table->BigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');

            $table->string('fax')->nullable($value =true);
            $table->string('codigo_postal', 6);
            $table->string('tecnico_resp_exp', 50);
            $table->string('firma_digital');
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
        Schema::dropIfExists('identificaciones');
    }
}
