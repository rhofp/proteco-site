<?php

use Illuminate\Database\Seeder;

class ClassesTypesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('classestypes')->insert([
            ['description' => 'Taller'],
            ['description' => 'Curso intersemestral'],
            ['description' => 'Curso semestral'],
            ['description' => 'Curso sabatino'],
            ['description' => 'Evento'],
            ['description' => 'Conferencia']
        ]);
    }

}
