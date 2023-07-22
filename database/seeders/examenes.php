<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class examenes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Examenes')->insert([
            'ID'=>1,
            'examen'=> "Basico",
            'activo' => 1,
        ]);
        DB::table('Examenes')->insert([
            'ID'=>2,
            'examen'=> "Intermedio",
            'activo' => 1,
        ]);
        DB::table('Examenes')->insert([
            'ID'=>3,
            'examen'=> "Avanzado",
            'activo' => 1,
        ]);

    }
}
