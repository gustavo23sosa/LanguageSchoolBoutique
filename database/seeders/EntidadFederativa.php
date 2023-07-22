<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntidadFederativa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('EntidadFederativa')->insert([
          'id'=>"1",
          'entidad'=>"Aguascalientes",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"2",
          'entidad'=>"Baja California",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"3",
          'entidad'=>"Baja California Sur",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"4",
          'entidad'=>"Campeche",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"5",
          'entidad'=>"Coahuila",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"6",
          'entidad'=>"Colima",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"7",
          'entidad'=>"Chiapas",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"8",
          'entidad'=>"Chihuahua",
          'activo'=> 1,
        ]);//


        DB::table('EntidadFederativa')->insert([
          'id'=>"9",
          'entidad'=>"Durango",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"10",
          'entidad'=>"Distrito Federal",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"11",
          'entidad'=>"Guanajuato",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"12",
          'entidad'=>"Guerrero",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"13",
          'entidad'=>"Hidalgo",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"14",
          'entidad'=>"Jalisco",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"15",
          'entidad'=>"México",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"16",
          'entidad'=>"Michoacán",
          'activo'=> 1,
        ]);


        DB::table('EntidadFederativa')->insert([
          'id'=>"17",
          'entidad'=>"Morelos",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"18",
          'entidad'=>"Nayarit",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"19",
          'entidad'=>"Nuevo León",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"20",
          'entidad'=>"Oaxaca",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"21",
          'entidad'=>"Puebla",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"22",
          'entidad'=>"Querétaro",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"23",
          'entidad'=>"Quintana Roo",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"24",
          'entidad'=>"San Luis Potosí",
          'activo'=> 1,
        ]);//


        DB::table('EntidadFederativa')->insert([
          'id'=>"25",
          'entidad'=>"Sinaloa",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"26",
          'entidad'=>"Sonora",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"27",
          'entidad'=>"Tabasco",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"28",
          'entidad'=>"Tamaulipas",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"29",
          'entidad'=>"Tlaxcala",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"30",
          'entidad'=>"Tlaxcala",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"31",
          'entidad'=>"Yucatán",
          'activo'=> 1,
        ]);//
        DB::table('EntidadFederativa')->insert([
          'id'=>"32",
          'entidad'=>"Zacatecas",
          'activo'=> 1,
        ]);
    }
}
