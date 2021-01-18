<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanosFenomMeteorsProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danos_fenom_meteors_prods', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('parcela_id')->unsigned();
            $table->foreign('parcela_id')->references('id')->on('parcelas');
            $table->integer('recursos_humanos_hrs');
            $table->double('recursos_humanos_coste_unit', 8, 2);
            $table->double('recursos_humanos_coste_total', 8, 2);
            $table->integer('recursos_materiales_hrs');
            $table->double('resursos_materiales_coste_u', 8, 2);
            $table->double('resursos_materiales_coste_t', 8, 2);
            $table->integer('total_danos_fenom_meteors_hrs');
            $table->double('total_danos_fenom_meteors_coste_unit', 8, 2);
            $table->double('total_danos_fenom_meteors_coste_total', 8, 2);
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
        Schema::dropIfExists('danos_fenom_meteors_prods');
    }
}
