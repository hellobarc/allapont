<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInveservisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inveservis', function (Blueprint $table) {
            $table->bigIncrements('inveservi_id');# Id
            $table->string('url')->unique();
            $table->string('titulo');
            $table->longText('texto');
            $table->string('imagen_car');
            $table->string('imagen_in');
            $table->string('tipo');
            $table->json('sub_servicios');
            ##
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
        Schema::dropIfExists('inveservis');
    }
}
