<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exprespuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Exprespuesta', function (Blueprint $table) {
            $table->tinyInteger('ID')->primary();
            $table->tinyInteger('fk_examen', 40);
            $table->tinyInteger('fk_pregunta', 40);
            $table->tinyInteger('fk_respuesta', 40);
            $table->tinyInteger('correcta', 40);

            // $table->foreign('fk_examen')->references('ID')->on('Examenes');
            $table->foreign('fk_pregunta')->references('ID')->on('Preguntas');
            $table->foreign('fk_respuesta')->references('ID')->on('Respuestas');
            

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
        Schema::dropIfExists('Exprespuesta');
    }
}
