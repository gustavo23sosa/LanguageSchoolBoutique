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

            $table->tinyinteger('fk_examenes');
            $table->foreign('fk_examenes')->references('ID')->on('Examenes');
            $table->tinyinteger('fk_preguntas');
            $table->foreign('fk_preguntas')->references('ID')->on('Preguntas');

            $table->tinyinteger('fk_respuestas');
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
    }
}
