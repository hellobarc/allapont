<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tesis_id');
            $table->string('monto');
            $table->string('dia_ven');
            $table->string('mes_ven');
            $table->string('agno_ven');
            $table->string('dia_can')->default('vacio');
            $table->string('mes_can')->default('vacio');
            $table->string('agno_can')->default('vacio');
            $table->string('estado')->default('0');
            $table->string('voucher')->default('0');
            $table->string('monto_verif')->default('0');
            $table->string('codigo_cuota');

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
        Schema::dropIfExists('cuotas');
    }
}
