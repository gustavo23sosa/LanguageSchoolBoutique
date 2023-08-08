<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('aPaterno');
            $table->string('aMaterno');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono');
            // $table->string('archivo')->nullable();
            $table->string('password'); 
            $table->rememberToken();
            $table->tinyinteger('Resultado')->nullable();
            $table->string('Observaciones')->default('Sin Observaciones');

            $table->tinyinteger('fk_rango')->default('7');
            $table->foreign('fk_rango')->references('ID')->on('MCER');

            $table->tinyinteger('fk_nivel')->default('1');
            $table->foreign('fk_nivel')->references('ID')->on('Nivel');

            $table->tinyinteger('fk_clases')->default('1');
            $table->foreign('fk_clases')->references('ID')->on('Clases');


            $table->tinyinteger('fk_estado');
            $table->foreign('fk_estado')->references('id')->on('EntidadFederativa');

            $table->tinyinteger('fk_estatus')->default(1);
            $table->foreign('fk_estatus')->references('ID')->on('EstatusUser');


            // $table->timestamps();
            $table->dateTime('created_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('activo')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
