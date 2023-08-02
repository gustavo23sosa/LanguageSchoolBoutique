<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasRespuestas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>1,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 1,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>2,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 2,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>3,
            'fk_examenes' => 1,
            'fk_preguntas' => 1,
            'fk_respuestas' => 3,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>4,
            'fk_examenes' => 1,
            'fk_preguntas' => 2,
            'fk_respuestas' => 4,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>5,
            'fk_examenes' => 1,
            'fk_preguntas' => 2,
            'fk_respuestas' => 5,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>6,
            'fk_examenes' => 1,
            'fk_preguntas' => 2,
            'fk_respuestas' => 6,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>7,
            'fk_examenes' => 1,
            'fk_preguntas' => 3,
            'fk_respuestas' => 7,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>8,
            'fk_examenes' => 1,
            'fk_preguntas' => 3,
            'fk_respuestas' => 8,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>9,
            'fk_examenes' => 1,
            'fk_preguntas' => 3,
            'fk_respuestas' => 9,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>10,
            'fk_examenes' => 1,
            'fk_preguntas' => 4,
            'fk_respuestas' => 10,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>11,
            'fk_examenes' => 1,
            'fk_preguntas' => 4,
            'fk_respuestas' => 11,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>12,
            'fk_examenes' => 1,
            'fk_preguntas' => 4,
            'fk_respuestas' => 12,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>13,
            'fk_examenes' => 1,
            'fk_preguntas' => 5,
            'fk_respuestas' => 13,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>14,
            'fk_examenes' => 1,
            'fk_preguntas' => 5,
            'fk_respuestas' => 14,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>15,
            'fk_examenes' => 1,
            'fk_preguntas' => 5,
            'fk_respuestas' => 15,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>16,
            'fk_examenes' => 1,
            'fk_preguntas' => 6,
            'fk_respuestas' => 16,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>17,
            'fk_examenes' => 1,
            'fk_preguntas' => 6,
            'fk_respuestas' => 17,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>18,
            'fk_examenes' => 1,
            'fk_preguntas' => 6,
            'fk_respuestas' => 18,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>19,
            'fk_examenes' => 1,
            'fk_preguntas' => 7,
            'fk_respuestas' => 19,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>20,
            'fk_examenes' => 1,
            'fk_preguntas' => 7,
            'fk_respuestas' => 20,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>21,
            'fk_examenes' => 1,
            'fk_preguntas' => 7,
            'fk_respuestas' => 21,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>22,
            'fk_examenes' => 1,
            'fk_preguntas' => 8,
            'fk_respuestas' => 22,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>23,
            'fk_examenes' => 1,
            'fk_preguntas' => 8,
            'fk_respuestas' => 23,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>24,
            'fk_examenes' => 1,
            'fk_preguntas' => 8,
            'fk_respuestas' => 24,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>25,
            'fk_examenes' => 1,
            'fk_preguntas' => 9,
            'fk_respuestas' => 25,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>26,
            'fk_examenes' => 1,
            'fk_preguntas' => 9,
            'fk_respuestas' => 26,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>27,
            'fk_examenes' => 1,
            'fk_preguntas' => 9,
            'fk_respuestas' => 27,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>28,
            'fk_examenes' => 1,
            'fk_preguntas' => 10,
            'fk_respuestas' => 28,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>29,
            'fk_examenes' => 1,
            'fk_preguntas' => 10,
            'fk_respuestas' => 29,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>30,
            'fk_examenes' => 1,
            'fk_preguntas' => 10,
            'fk_respuestas' => 30,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>31,
            'fk_examenes' => 1,
            'fk_preguntas' => 11,
            'fk_respuestas' => 31,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>32,
            'fk_examenes' => 1,
            'fk_preguntas' => 11,
            'fk_respuestas' => 32,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>33,
            'fk_examenes' => 1,
            'fk_preguntas' => 11,
            'fk_respuestas' => 33,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>34,
            'fk_examenes' => 1,
            'fk_preguntas' => 12,
            'fk_respuestas' => 34,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>35,
            'fk_examenes' => 1,
            'fk_preguntas' => 12,
            'fk_respuestas' => 35,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>36,
            'fk_examenes' => 1,
            'fk_preguntas' => 12,
            'fk_respuestas' => 36,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>37,
            'fk_examenes' => 1,
            'fk_preguntas' => 13,
            'fk_respuestas' => 37,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>38,
            'fk_examenes' => 1,
            'fk_preguntas' => 13,
            'fk_respuestas' => 38,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>39,
            'fk_examenes' => 1,
            'fk_preguntas' => 13,
            'fk_respuestas' => 39,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>40,
            'fk_examenes' => 1,
            'fk_preguntas' => 14,
            'fk_respuestas' => 40,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>41,
            'fk_examenes' => 1,
            'fk_preguntas' => 14,
            'fk_respuestas' => 41,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>42,
            'fk_examenes' => 1,
            'fk_preguntas' => 14,
            'fk_respuestas' => 42,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>43,
            'fk_examenes' => 1,
            'fk_preguntas' => 15,
            'fk_respuestas' => 43,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>44,
            'fk_examenes' => 1,
            'fk_preguntas' => 15,
            'fk_respuestas' => 44,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>45,
            'fk_examenes' => 1,
            'fk_preguntas' => 15,
            'fk_respuestas' => 45,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>46,
            'fk_examenes' => 1,
            'fk_preguntas' => 16,
            'fk_respuestas' => 46,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>47,
            'fk_examenes' => 1,
            'fk_preguntas' => 16,
            'fk_respuestas' => 47,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>48,
            'fk_examenes' => 1,
            'fk_preguntas' => 16,
            'fk_respuestas' => 48,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>49,
            'fk_examenes' => 1,
            'fk_preguntas' => 16,
            'fk_respuestas' => 49,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>50,
            'fk_examenes' => 1,
            'fk_preguntas' => 17,
            'fk_respuestas' => 50,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>51,
            'fk_examenes' => 1,
            'fk_preguntas' => 17,
            'fk_respuestas' => 51,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>52,
            'fk_examenes' => 1,
            'fk_preguntas' => 17,
            'fk_respuestas' => 52,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>53,
            'fk_examenes' => 1,
            'fk_preguntas' => 17,
            'fk_respuestas' => 53,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>54,
            'fk_examenes' => 1,
            'fk_preguntas' => 18,
            'fk_respuestas' => 54,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>55,
            'fk_examenes' => 1,
            'fk_preguntas' => 18,
            'fk_respuestas' => 55,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>56,
            'fk_examenes' => 1,
            'fk_preguntas' => 18,
            'fk_respuestas' => 56,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>57,
            'fk_examenes' => 1,
            'fk_preguntas' => 18,
            'fk_respuestas' => 57,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>58,
            'fk_examenes' => 1,
            'fk_preguntas' => 19,
            'fk_respuestas' => 58,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>59,
            'fk_examenes' => 1,
            'fk_preguntas' => 19,
            'fk_respuestas' => 59,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>60,
            'fk_examenes' => 1,
            'fk_preguntas' => 19,
            'fk_respuestas' => 60,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>61,
            'fk_examenes' => 1,
            'fk_preguntas' => 19,
            'fk_respuestas' => 61,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>62,
            'fk_examenes' => 1,
            'fk_preguntas' => 20,
            'fk_respuestas' => 62,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>63,
            'fk_examenes' => 1,
            'fk_preguntas' => 20,
            'fk_respuestas' => 63,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>64,
            'fk_examenes' => 1,
            'fk_preguntas' => 20,
            'fk_respuestas' => 64,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>65,
            'fk_examenes' => 1,
            'fk_preguntas' => 20,
            'fk_respuestas' => 65,
            'activo' => 1,
        ]);
    }
}
