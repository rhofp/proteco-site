<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(AsistenteSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(LugarSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
