<?php

use Illuminate\Database\Seeder;
use App\Semester;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create(['description' => '20192']);
        Semester::create(['description' => '20201']);
    }
}
