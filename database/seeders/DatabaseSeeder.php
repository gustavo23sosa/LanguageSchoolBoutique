<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(examenes::class);
        $this->call(preguntas::class);
        $this->call(respuestas::class);
        $this->call(PreguntasRespuestas::class);
        $this->call(Roles::class);
        $this->call(EntidadFederativa::class);
        $this->call(EstatusUser::class);
        $this->call(nivel::class);
        $this->call(Clases::class);
        $this->call(MCER::class);
        $this->call(users::class);
        $this->call(UsersRoles::class);
    }
}
