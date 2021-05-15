<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tags')->insert([
            ['description' => 'Lenguaje C'],
            ['description' => 'Java'],
            ['description' => 'Arduino'],
            ['description' => 'PHP'],
            ['description' => 'Fortran'],
            ['description' => 'Raspberry'],
        ]);
    }

}
