<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Roles')->insert([
            'ID'=>1,
            'rol'=> "Administrador",
        ]);

        DB::table('Roles')->insert([
            'ID'=>2,
            'rol'=> "Usuario",
        ]);
    }
}
