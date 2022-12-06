<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado')->default('0');#0->sin entregar;1->entregado
            $table->string('visible')->default('1');#0->no mostrar; 1->mostrar
            $table->string('tesis_id')->default('0');# Investigación asignada

            #Reqerimiento
            $table->string('req_coment')->default('vacio');
            $table->json('req_files')->nullable();
            $table->string('req_dia')->default('vacio');
            $table->string('req_mes')->default('vacio');
            $table->string('req_agno')->default('vacio');
            $table->string('req_hora')->default('vacio');
            ##AGREGADO AL FINAL
            $table->string('req_date')->default('vacio');

            #Entrega
            $table->string('ent_coment')->default('vacio');
            $table->json('ent_files')->nullable();
            $table->string('ent_date')->default('vacio');
            $table->string('aporte')->default('vacio');

            #modified added by Tarique
            $table->bigInteger('user_id');
            $table->text('title')->nullable();
            $table->text('comentary')->nullable();
            $table->text('files')->nullable();
            $table->text('date_of_delivery')->nullable();
            $table->string('post_session')->nullable();

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
        Schema::dropIfExists('avances');
    }
}
