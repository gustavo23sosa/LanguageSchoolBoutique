<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('PreguntasRespuestas', function (Blueprint $table) {

            $table->smallInteger('ID')->primary();

            $table->tinyinteger('fk_examenes');
            $table->foreign('fk_examenes')->references('ID')->on('Examenes');
            $table->tinyinteger('fk_preguntas');
            $table->foreign('fk_preguntas')->references('ID')->on('Preguntas');

            $table->smallInteger('fk_respuestas');
            $table->foreign('fk_respuestas')->references('ID')->on('Respuestas');

            $table->boolean('activo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('PreguntasRespuestas');
    }
}
