<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alertas', function (Blueprint $table) {
            $table->increments('id_alerta');
            $table->text('mensagem')->nullable();
            $table->integer('resolvido');
            //$table->foreign('id_paciente')->references('id_pacientes')->on('tb_pacientes');

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
        Schema::dropIfExists('tb_alertas');
    }
}
