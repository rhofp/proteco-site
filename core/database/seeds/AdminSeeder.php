<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
           'name' => 'Erick',
           'lastname' => 'López',
            'email' => 'erik.proteco@gmail.com',
            'password' => Hash::make('proteco123')
        ]);
    }
}
