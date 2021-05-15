<?php

use Illuminate\Database\Seeder;

class InscriptionsStatesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inscriptionsstates')->insert([
            ['description' => 'Pagado'],
            ['description' => 'Becado'],
            ['description' => 'Pago parcial'],
            ['description' => 'Reembolso'],
            ['description' => 'Pendiente']
        ]);
    }

}
