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
        DB::table('Preguntas')->insert([
            'ID'=>21,
            'preguntas'=> "1 Which sentence is grammatically correct?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>22,
            'preguntas'=> "2 Choose the correct verb tense:",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>23,
            'preguntas'=> "3 Choose the correct form of the adjective:",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>24,
            'preguntas'=> "4 Which sentence uses the correct comparative form?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>25,
            'preguntas'=> "5 Choose the correct sentence:",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>26,
            'preguntas'=> "6 Which of the following is the correct superlative form of the adjective 'delicious'?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>27,
            'preguntas'=> "7 Choose the correct superlative form of 'funny':",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>28,
            'preguntas'=> "8 Which sentence is correct?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>29,
            'preguntas'=> "9 Choose the correct preposition to complete the sentence: I'm looking forward ________ the concert tomorrow.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>30,
            'preguntas'=> "10 Choose the correct preposition to complete the sentence: He's really good ________ playing the piano.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>31,
            'preguntas'=> "11 Choose the correct form: 'I hope _____ (find) a good job soon.'",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>32,
            'preguntas'=> "12 Choose the correct form: 'He decided _____ (study) medicine at university.'",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>33,
            'preguntas'=> "13 She _____ her phone on the bus yesterday.",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>34,
            'preguntas'=> "14 _____ you study for the test last night?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>35,
            'preguntas'=> "15 Which of the following is the correct comparative form of the adjective 'beautiful'?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>36,
            'preguntas'=> "16 Yellowstone is an important national park in the United States because:",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>37,
            'preguntas'=> "17 When did Lisa and her friends visit Yellowstone National Park?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>38,
            'preguntas'=> "18 Where did Lisa and her friends stay during their visit to the park?",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>39,
            'preguntas'=> "19 All of the following are animals that Lisa saw during her trip except:",
            'activo' => 1,
        ]);
        DB::table('Preguntas')->insert([
            'ID'=>40,
            'preguntas'=> "20 Why did Lisa and her friends wait patiently when visiting Old Faithful?",
            'activo' => 1,
        ]);
    }
}
