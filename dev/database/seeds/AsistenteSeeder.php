<?php

use Illuminate\Database\Seeder;

class AsistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Asistente::class,50)->create();
    }
}
