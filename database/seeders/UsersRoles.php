<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('UsersRoles')->insert([
            'fk_users'=>1,
            'fk_roles'=>1,
        ]);

        DB::table('UsersRoles')->insert([
            'fk_users'=>2,
            'fk_roles'=>1,
        ]);
        DB::table('UsersRoles')->insert([
            'fk_users'=>3,
            'fk_roles'=>2,
        ]);

        DB::table('UsersRoles')->insert([
            'fk_users'=>4,
            'fk_roles'=>2,
        ]);
        DB::table('UsersRoles')->insert([
            'fk_users'=>5,
            'fk_roles'=>2,
        ]);

        DB::table('UsersRoles')->insert([
            'fk_users'=>6,
            'fk_roles'=>1,
        ]);
    }
}
