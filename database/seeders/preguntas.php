<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class preguntas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Preguntas')->insert([
            'ID'=>1,
            'preguntas'=> "1 Traduzca al inglés la siguiente oración: ¿Estás en el parque?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>2,
            'preguntas'=> "2 Who is Kate? Kate is my friend. ____ is a teacher.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>3,
            'preguntas'=> "3 Where's the cat? _____ is in the garden.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>4,
            'preguntas'=> "4 We go to the supermarket on ____ Saturdays.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>5,
            'preguntas'=> "5 We live in _____ house. _____ house is small.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>6,
            'preguntas'=> "6 Choose the correct verb form: She ____ to school every day.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>7,
            'preguntas'=> "7 Choose the correct pronoun: ____ is my friend.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>8,
            'preguntas'=> "8 Choose the correct preposition: I'm going ____ the store.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>9,
            'preguntas'=> "9 What is the correct verb form to complete the sentence: I _____ to school every day.?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>10,
            'preguntas'=> "10 Which sentence is in the present continuous tense?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>11,
            'preguntas'=> "11 What is the correct possessive form of the word 'dog'?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>12,
            'preguntas'=> "12 ¿Cuál es el artículo indefinido en inglés?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>13,
            'preguntas'=> "13 ¿Cuál es la forma correcta del verbo 'to eat' en tercera persona del singular?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>14,
            'preguntas'=> "14 ¿Qué pronombre personal es equivalente a 'él' en inglés?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>15,
            'preguntas'=> "15 ¿Cuál es el verbo 'ser' en inglés?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>16,
            'preguntas'=> "16 How many children do Mr. and Mrs. Smith have?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>17,
            'preguntas'=> "17 Who cooks in the kitchen?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>18,
            'preguntas'=> "18 Where does the family eat?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>19,
            'preguntas'=> "19 How many bedrooms are in the house?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>20,
            'preguntas'=> "20 What do John and Sarah do in the garden?",
            'activo' => 1,
        ]);

    }
}
