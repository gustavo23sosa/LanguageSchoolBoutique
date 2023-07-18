<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Clases extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Clases')->insert([
            'ID'=>1,
            'tipo'=>"Sin elección",
            'activo'=> 0,
        ]);
        DB::table('Clases')->insert([
            'ID'=>2,
            'tipo'=>"Grupal",
            'activo'=> 1,
        ]);
        DB::table('Clases')->insert([
            'ID'=>3,
            'tipo'=>"Individual",
            'activo'=> 1,
        ]);

    }
}
