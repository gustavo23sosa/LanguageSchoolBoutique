<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class respuestas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Respuestas')->insert([
            'ID'=>1,
            'respuestas'=> "Were you at the park?.",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>2,
            'respuestas'=> "Is you at the park?.",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>3,
            'respuestas'=> "Are you at the park?.",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>4,
            'respuestas'=> "Her",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>5,
            'respuestas'=> "He",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>6,
            'respuestas' => "She",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>7,
            'respuestas'=> "It",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>8,
            'respuestas'=> "Its",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>9,
            'respuestas'=> "He",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>10,
            'respuestas'=> "the",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>11,
            'respuestas'=> "—-",
            'activo' => 1,
        ]);
        DB::table('Respuestas')->insert([
            'ID'=>12,
            'respuestas'=> "an",
            'activo' => 1,
        ]);
       
    }
}
