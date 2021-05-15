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
        $this->call(ClassTypeSeeder::class);
        $this->call(PlaceSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ClassSeeder::class);
    }
}
