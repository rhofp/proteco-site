<?php

use Illuminate\Database\Seeder;

class SemestersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('semesters')->insert([
            ['description' => '20141'],
            ['description' => '20142'],
            ['description' => '20151'],
            ['description' => '20152'],
            ['description' => '20161'],
            ['description' => '20162'],
        ]);
    }

}
