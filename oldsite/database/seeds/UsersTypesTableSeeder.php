<?php

use Illuminate\Database\Seeder;

class UsersTypesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('userstypes')->insert([
            ['description' => 'Estudiante UNAM'],
            ['description' => 'Estudiante externo'],
            ['description' => 'Publico general'],
            ['description' => 'Becario'],
            ['description' => 'Administrador'],
        ]);
    }

}
