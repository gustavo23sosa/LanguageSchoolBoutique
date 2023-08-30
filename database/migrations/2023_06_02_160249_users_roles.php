<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('UsersRoles', function (Blueprint $table) {
            $table->increments('ID');
            $table->bigInteger('fk_users')->unsigned();
            $table->foreign('fk_users')->references('ID')->on('users');
            $table->tinyInteger('fk_roles');
            $table->foreign('fk_roles')->references('ID')->on('Roles');
            $table->dateTime('created_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('UsersRoles');
    }
}
