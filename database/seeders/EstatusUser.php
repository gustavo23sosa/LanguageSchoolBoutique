<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('EstatusUser')->insert([
            'ID'=>1,
            'estatus'=>"Registrado",
            'activo'=> 1,
        ]);

        DB::table('EstatusUser')->insert([
            'ID'=>2,
            'estatus'=>"Aceptado",
            'activo'=> 1,
        ]);

        DB::table('EstatusUser')->insert([
            'ID'=>3,
            'estatus'=>"Baja",
            'activo'=> 1,
        ]);
    }
}
