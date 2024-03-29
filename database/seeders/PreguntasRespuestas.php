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


        DB::table('PreguntasRespuestas')->insert([
            'ID'=>66,
            'fk_examenes' => 2,
            'fk_preguntas' => 21,
            'fk_respuestas' => 66,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>67,
            'fk_examenes' => 2,
            'fk_preguntas' => 21,
            'fk_respuestas' => 67,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>68,
            'fk_examenes' => 2,
            'fk_preguntas' => 21,
            'fk_respuestas' => 68,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>69,
            'fk_examenes' => 2,
            'fk_preguntas' => 22,
            'fk_respuestas' => 69,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>70,
            'fk_examenes' => 2,
            'fk_preguntas' => 22,
            'fk_respuestas' => 70,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>71,
            'fk_examenes' => 2,
            'fk_preguntas' => 22,
            'fk_respuestas' => 71,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>72,
            'fk_examenes' => 2,
            'fk_preguntas' => 23,
            'fk_respuestas' => 72,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>73,
            'fk_examenes' => 2,
            'fk_preguntas' => 23,
            'fk_respuestas' => 73,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>74,
            'fk_examenes' => 2,
            'fk_preguntas' => 23,
            'fk_respuestas' => 74,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>75,
            'fk_examenes' => 2,
            'fk_preguntas' => 24,
            'fk_respuestas' => 75,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>76,
            'fk_examenes' => 2,
            'fk_preguntas' => 24,
            'fk_respuestas' => 76,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>77,
            'fk_examenes' => 2,
            'fk_preguntas' => 24,
            'fk_respuestas' => 77,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>78,
            'fk_examenes' => 2,
            'fk_preguntas' => 25,
            'fk_respuestas' => 78,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>79,
            'fk_examenes' => 2,
            'fk_preguntas' => 25,
            'fk_respuestas' => 79,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>80,
            'fk_examenes' => 2,
            'fk_preguntas' => 25,
            'fk_respuestas' => 80,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>81,
            'fk_examenes' => 2,
            'fk_preguntas' => 26,
            'fk_respuestas' => 81,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>82,
            'fk_examenes' => 2,
            'fk_preguntas' => 26,
            'fk_respuestas' => 82,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>83,
            'fk_examenes' => 2,
            'fk_preguntas' => 26,
            'fk_respuestas' => 83,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>84,
            'fk_examenes' => 2,
            'fk_preguntas' => 27,
            'fk_respuestas' => 84,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>85,
            'fk_examenes' => 2,
            'fk_preguntas' => 27,
            'fk_respuestas' => 85,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>86,
            'fk_examenes' => 2,
            'fk_preguntas' => 27,
            'fk_respuestas' => 86,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>87,
            'fk_examenes' => 2,
            'fk_preguntas' => 28,
            'fk_respuestas' => 87,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>88,
            'fk_examenes' => 2,
            'fk_preguntas' => 28,
            'fk_respuestas' => 88,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>89,
            'fk_examenes' => 2,
            'fk_preguntas' => 28,
            'fk_respuestas' => 89,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>90,
            'fk_examenes' => 2,
            'fk_preguntas' => 29,
            'fk_respuestas' => 90,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>91,
            'fk_examenes' => 2,
            'fk_preguntas' => 29,
            'fk_respuestas' => 91,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>92,
            'fk_examenes' => 2,
            'fk_preguntas' => 29,
            'fk_respuestas' => 92,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>93,
            'fk_examenes' => 2,
            'fk_preguntas' => 30,
            'fk_respuestas' => 93,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>94,
            'fk_examenes' => 2,
            'fk_preguntas' => 30,
            'fk_respuestas' => 94,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>95,
            'fk_examenes' => 2,
            'fk_preguntas' => 30,
            'fk_respuestas' => 95,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>96,
            'fk_examenes' => 2,
            'fk_preguntas' => 31,
            'fk_respuestas' => 96,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>97,
            'fk_examenes' => 2,
            'fk_preguntas' => 31,
            'fk_respuestas' => 97,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>98,
            'fk_examenes' => 2,
            'fk_preguntas' => 31,
            'fk_respuestas' => 98,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>99,
            'fk_examenes' => 2,
            'fk_preguntas' => 32,
            'fk_respuestas' => 99,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>100,
            'fk_examenes' => 2,
            'fk_preguntas' => 32,
            'fk_respuestas' => 100,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>101,
            'fk_examenes' => 2,
            'fk_preguntas' => 32,
            'fk_respuestas' => 101,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>102,
            'fk_examenes' => 2,
            'fk_preguntas' => 33,
            'fk_respuestas' => 102,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>103,
            'fk_examenes' => 2,
            'fk_preguntas' => 33,
            'fk_respuestas' => 103,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>104,
            'fk_examenes' => 2,
            'fk_preguntas' => 33,
            'fk_respuestas' => 104,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>105,
            'fk_examenes' => 2,
            'fk_preguntas' => 34,
            'fk_respuestas' => 105,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>106,
            'fk_examenes' => 2,
            'fk_preguntas' => 34,
            'fk_respuestas' => 106,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>107,
            'fk_examenes' => 2,
            'fk_preguntas' => 34,
            'fk_respuestas' => 107,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>108,
            'fk_examenes' => 2,
            'fk_preguntas' => 35,
            'fk_respuestas' => 108,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>109,
            'fk_examenes' => 2,
            'fk_preguntas' => 35,
            'fk_respuestas' => 109,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>110,
            'fk_examenes' => 2,
            'fk_preguntas' => 35,
            'fk_respuestas' => 110,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>111,
            'fk_examenes' => 2,
            'fk_preguntas' => 36,
            'fk_respuestas' => 111,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>112,
            'fk_examenes' => 2,
            'fk_preguntas' => 36,
            'fk_respuestas' => 112,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>113,
            'fk_examenes' => 2,
            'fk_preguntas' => 36,
            'fk_respuestas' => 113,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>114,
            'fk_examenes' => 2,
            'fk_preguntas' => 37,
            'fk_respuestas' => 114,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>115,
            'fk_examenes' => 2,
            'fk_preguntas' => 37,
            'fk_respuestas' => 115,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>116,
            'fk_examenes' => 2,
            'fk_preguntas' => 37,
            'fk_respuestas' => 116,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>117,
            'fk_examenes' => 2,
            'fk_preguntas' => 38,
            'fk_respuestas' => 117,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>118,
            'fk_examenes' => 2,
            'fk_preguntas' => 38,
            'fk_respuestas' => 118,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>119,
            'fk_examenes' => 2,
            'fk_preguntas' => 38,
            'fk_respuestas' => 119,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>120,
            'fk_examenes' => 2,
            'fk_preguntas' => 39,
            'fk_respuestas' => 120,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>121,
            'fk_examenes' => 2,
            'fk_preguntas' => 39,
            'fk_respuestas' => 121,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>122,
            'fk_examenes' => 2,
            'fk_preguntas' => 39,
            'fk_respuestas' => 122,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>123,
            'fk_examenes' => 2,
            'fk_preguntas' => 40,
            'fk_respuestas' => 123,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>124,
            'fk_examenes' => 2,
            'fk_preguntas' => 40,
            'fk_respuestas' => 124,
            'activo' => 1,
        ]);
        DB::table('PreguntasRespuestas')->insert([
            'ID'=>125,
            'fk_examenes' => 2,
            'fk_preguntas' => 40,
            'fk_respuestas' => 125,
            'activo' => 1,
        ]);



        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   126 , 'fk_examenes' => 3, 'fk_preguntas' =>     41  , 'fk_respuestas' =>    126 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   127 , 'fk_examenes' => 3, 'fk_preguntas' =>     41  , 'fk_respuestas' =>    127 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   128 , 'fk_examenes' => 3, 'fk_preguntas' =>     41  , 'fk_respuestas' =>    128 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   129 , 'fk_examenes' => 3, 'fk_preguntas' =>     41  , 'fk_respuestas' =>    129 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   130 , 'fk_examenes' => 3, 'fk_preguntas' =>     42  , 'fk_respuestas' =>    130 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   131 , 'fk_examenes' => 3, 'fk_preguntas' =>     42  , 'fk_respuestas' =>    131 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   132 , 'fk_examenes' => 3, 'fk_preguntas' =>     42  , 'fk_respuestas' =>    132 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   133 , 'fk_examenes' => 3, 'fk_preguntas' =>     43  , 'fk_respuestas' =>    133 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   134 , 'fk_examenes' => 3, 'fk_preguntas' =>     43  , 'fk_respuestas' =>    134 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   135 , 'fk_examenes' => 3, 'fk_preguntas' =>     43  , 'fk_respuestas' =>    135 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   136 , 'fk_examenes' => 3, 'fk_preguntas' =>     44  , 'fk_respuestas' =>    136 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   137 , 'fk_examenes' => 3, 'fk_preguntas' =>     44  , 'fk_respuestas' =>    137 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   138 , 'fk_examenes' => 3, 'fk_preguntas' =>     44  , 'fk_respuestas' =>    138 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   139 , 'fk_examenes' => 3, 'fk_preguntas' =>     45  , 'fk_respuestas' =>    139 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   140 , 'fk_examenes' => 3, 'fk_preguntas' =>     45  , 'fk_respuestas' =>    140 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   141 , 'fk_examenes' => 3, 'fk_preguntas' =>     45  , 'fk_respuestas' =>    141 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   142 , 'fk_examenes' => 3, 'fk_preguntas' =>     46  , 'fk_respuestas' =>    142 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   143 , 'fk_examenes' => 3, 'fk_preguntas' =>     46  , 'fk_respuestas' =>    143 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   144 , 'fk_examenes' => 3, 'fk_preguntas' =>     46  , 'fk_respuestas' =>    144 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   145 , 'fk_examenes' => 3, 'fk_preguntas' =>     47  , 'fk_respuestas' =>    145 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   146 , 'fk_examenes' => 3, 'fk_preguntas' =>     47  , 'fk_respuestas' =>    146 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   147 , 'fk_examenes' => 3, 'fk_preguntas' =>     47  , 'fk_respuestas' =>    147 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   148 , 'fk_examenes' => 3, 'fk_preguntas' =>     48  , 'fk_respuestas' =>    148 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   149 , 'fk_examenes' => 3, 'fk_preguntas' =>     48  , 'fk_respuestas' =>    149 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   150 , 'fk_examenes' => 3, 'fk_preguntas' =>     48  , 'fk_respuestas' =>    150 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   151 , 'fk_examenes' => 3, 'fk_preguntas' =>     49  , 'fk_respuestas' =>    151 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   152 , 'fk_examenes' => 3, 'fk_preguntas' =>     49  , 'fk_respuestas' =>    152 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   153 , 'fk_examenes' => 3, 'fk_preguntas' =>     49  , 'fk_respuestas' =>    153 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   154 , 'fk_examenes' => 3, 'fk_preguntas' =>     50  , 'fk_respuestas' =>    154 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   155 , 'fk_examenes' => 3, 'fk_preguntas' =>     50  , 'fk_respuestas' =>    155 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   156 , 'fk_examenes' => 3, 'fk_preguntas' =>     50  , 'fk_respuestas' =>    156 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   157 , 'fk_examenes' => 3, 'fk_preguntas' =>     51  , 'fk_respuestas' =>    157 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   158 , 'fk_examenes' => 3, 'fk_preguntas' =>     51  , 'fk_respuestas' =>    158 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   159 , 'fk_examenes' => 3, 'fk_preguntas' =>     51  , 'fk_respuestas' =>    159 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   160 , 'fk_examenes' => 3, 'fk_preguntas' =>     52  , 'fk_respuestas' =>    160 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   161 , 'fk_examenes' => 3, 'fk_preguntas' =>     52  , 'fk_respuestas' =>    161 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   162 , 'fk_examenes' => 3, 'fk_preguntas' =>     52  , 'fk_respuestas' =>    162 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   163 , 'fk_examenes' => 3, 'fk_preguntas' =>     53  , 'fk_respuestas' =>    163 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   164 , 'fk_examenes' => 3, 'fk_preguntas' =>     54  , 'fk_respuestas' =>    164 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   165 , 'fk_examenes' => 3, 'fk_preguntas' =>     55  , 'fk_respuestas' =>    165 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   166 , 'fk_examenes' => 3, 'fk_preguntas' =>     56  , 'fk_respuestas' =>    166 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   167 , 'fk_examenes' => 3, 'fk_preguntas' =>     56  , 'fk_respuestas' =>    167 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   168 , 'fk_examenes' => 3, 'fk_preguntas' =>     56  , 'fk_respuestas' =>    168 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   169 , 'fk_examenes' => 3, 'fk_preguntas' =>     57  , 'fk_respuestas' =>    169 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   170 , 'fk_examenes' => 3, 'fk_preguntas' =>     57  , 'fk_respuestas' =>    170 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   171 , 'fk_examenes' => 3, 'fk_preguntas' =>     57  , 'fk_respuestas' =>    171 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   172 , 'fk_examenes' => 3, 'fk_preguntas' =>     58  , 'fk_respuestas' =>    172 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   173 , 'fk_examenes' => 3, 'fk_preguntas' =>     58  , 'fk_respuestas' =>    173 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   174 , 'fk_examenes' => 3, 'fk_preguntas' =>     58  , 'fk_respuestas' =>    174 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   175 , 'fk_examenes' => 3, 'fk_preguntas' =>     59  , 'fk_respuestas' =>    175 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   176 , 'fk_examenes' => 3, 'fk_preguntas' =>     59  , 'fk_respuestas' =>    176 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   177 , 'fk_examenes' => 3, 'fk_preguntas' =>     59  , 'fk_respuestas' =>    177 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   178 , 'fk_examenes' => 3, 'fk_preguntas' =>     60  , 'fk_respuestas' =>    178 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   179 , 'fk_examenes' => 3, 'fk_preguntas' =>     60  , 'fk_respuestas' =>    179 , 'activo' => 1, ]);
        DB::table('PreguntasRespuestas')->insert([ 'ID'=>   180 , 'fk_examenes' => 3, 'fk_preguntas' =>     60  , 'fk_respuestas' =>    180 , 'activo' => 1, ]);

    }
}
