<?php

use App\Models\Asistente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AsistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Asistente::class,49)->create();

        Asistente::create([
            'name' => 'Rodrigo',
            'apellido_pat' => 'Francisco',
            'apellido_mat' => 'Pablo',
            'tipo' => 'estudiante',
            'email' => 'rhodfra@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('proteco123'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
