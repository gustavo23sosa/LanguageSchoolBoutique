<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Gustavo',
            'aPaterno' => 'Valencia',
            'aMaterno' => 'Sosa',
            'email' => 'tavovalencia349@gmail.com',
            'telefono' => '5623649359',
            'password'=> Hash::make('123456789'),
            'fk_estado' => '10',
            'fk_estatus' => '2',
            'activo'=>1
        ]);
        DB::table('users')->insert([
            'name' => 'Oscar Alejandro',
            'aPaterno' => 'Valencia',
            'aMaterno' => 'Sosa',
            'email' => 'gordito98@outlook.com',
            'telefono' => '5614073554',
            'password'=> Hash::make('123456789'),
            'fk_estado' => '10',
            'fk_estatus' => '2',
            'activo'=>1
        ]);
        DB::table('users')->insert([
            'name' => 'Cristina',
            'aPaterno' => 'Aguilera',
            'aMaterno' => 'Hernandez',
            'email' => 'criscris6@gmail.com',
            'telefono' => '5663837556',
            'password'=> Hash::make('123456789'),
            'fk_estado' => '4',
            'fk_estatus' => '1',
            'activo'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Alejandro',
            'aPaterno' => 'Fernandez',
            'aMaterno' => 'Fernandez',
            'email' => 'fercho666@outlook.com',
            'telefono' => '5524825432',
            'password'=> Hash::make('123456789'),
            'fk_estado' => '4',
            'fk_estatus' => '1',
            'activo'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Rodrigo',
            'aPaterno' => 'Amador',
            'aMaterno' => 'Rodriguez',
            'email' => 'rodrigo43@gmail.com',
            'telefono' => '5546342783',
            'password'=> Hash::make('123456789'),
            'fk_estado' => '15',
            'fk_estatus' => '1',
            'activo'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Angel',
            'aPaterno' => 'Santiago',
            'aMaterno' => 'Hernandez',
            'email' => 'spawn9737@outlook.com',
            'telefono' => '5513634943',
            'password'=> Hash::make('123456789'),
            'fk_estado' => '15',
            'fk_estatus' => '2',
            'activo'=>1
        ]);
    }
}
