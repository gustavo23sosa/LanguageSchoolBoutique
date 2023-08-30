<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntidadFederativa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('EntidadFederativa', function (Blueprint $table) {
            $table->tinyinteger('id')->primary();
            $table->string('entidad', 25);
            $table->dateTime('created_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('EntidadFederativa');
    }
}
