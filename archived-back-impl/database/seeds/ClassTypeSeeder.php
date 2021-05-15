<?php

use Illuminate\Database\Seeder;
use \App\ClassType;

class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassType::create(['description' => 'Taller']);
        ClassType::create(['description' => 'Curso Intersemestral']);
        ClassType::create(['description' => 'Curso Semestral']);
        ClassType::create(['description' => 'Curso Sabatino']);
        ClassType::create(['description' => 'Evento']);
        ClassType::create(['description' => 'Conferencia']);
    }
}
