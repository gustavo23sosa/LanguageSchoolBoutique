<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nivel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Nivel')->insert([
            'ID'=>1,
            'nivel'=>"Sin nivel",
            'activo'=> 0,
        ]);
        DB::table('Nivel')->insert([
            'ID'=>2,
            'nivel'=>"Nivel A1",
            'activo'=> 1,
        ]);

        DB::table('Nivel')->insert([
            'ID'=>3,
            'nivel'=>"Nivel A2",
            'activo'=> 1,
        ]);

        DB::table('Nivel')->insert([
            'ID'=>4,
            'nivel'=>"Nivel B1",
            'activo'=> 1,
        ]);

        DB::table('Nivel')->insert([
            'ID'=>5,
            'nivel'=>"Nivel B2",
            'activo'=> 1,
        ]);

        DB::table('Nivel')->insert([
            'ID'=>6,
            'nivel'=>"Nivel C1",
            'activo'=> 1,
        ]);

        DB::table('Nivel')->insert([
            'ID'=>7,
            'nivel'=>"Nivel C2",
            'activo'=> 1,
        ]);

    }
}
