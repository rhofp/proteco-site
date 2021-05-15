<?php

use Illuminate\Database\Seeder;
use App\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create(['description' => 'Por asignar']);
        Place::create(['description' => 'Laboratorio IBM/Java']);
        Place::create(['description' => 'PROTECO']);
    }
}
