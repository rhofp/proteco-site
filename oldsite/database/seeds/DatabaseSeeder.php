<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(ClassesTypesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(InscriptionsStatesTableSeeder::class);
        $this->call(SemestersTableSeeder::class);
        $this->call(UsersTypesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }

}
