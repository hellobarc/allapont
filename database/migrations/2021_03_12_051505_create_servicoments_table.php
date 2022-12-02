<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicomentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicoments', function (Blueprint $table) {
            $table->bigIncrements('servicoment_id');# Id
            $table->string('servi_name');
            $table->longText('comentario');
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            
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
        Schema::dropIfExists('servicoments');
    }
}
