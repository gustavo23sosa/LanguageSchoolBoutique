<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class exprespuesta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Exprespuesta')->insert([
            'ID'=>1,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 1,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>2,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 2,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>3,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 3,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>4,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 4,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>5,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 5,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>6,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 6,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>7,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 7,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>8,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 8,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>9,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 9,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>10,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 10,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>11,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 11,
            'activo' => 1,
        ]);
        DB::table('Exprespuesta')->insert([
            'ID'=>12,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 12,
            'activo' => 1,
        ]);
    }
}
