<?php

use App\Models\Lugar;
use Illuminate\Database\Seeder;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Lugar::class,20)->create();
    }
}
