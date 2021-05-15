<?php

use Illuminate\Database\Seeder;
use App\Classes;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::create([
            'startDate' => '2018-11-10',
             'endDate' => '2018-12-10',
             'startTime' => '09:00:00',
             'endTime' => '14:00:00',
             'days' => 'Sábados',
             'maxQuota' => '30',
             'currentQuota' => '0',
             'cost1' => '800',
             'cost2' => '1600',
             'cost3' => '2500',
             //Se rellenan con 'consultas'
             'semester_id' => '1',
             'course_id' => '1',
             'place_id' => '2',
             'type_id' => '3',
        ]);
        Classes::create([
            'startDate' => '2019-11-10',
             'endDate' => '2019-12-01',
             'startTime' => '09:00:00',
             'endTime' => '14:00:00',
             'days' => 'Sábados',
             'maxQuota' => '30',
             'currentQuota' => '1',
             'cost1' => '900',
             'cost2' => '1600',
             'cost3' => '2500',
             'semester_id' => '1',
             'course_id' => '2',
             'place_id' => '2',
             'type_id' => '3',
        ]);
        Classes::create([
            'startDate' => '2019-11-10',
             'endDate' => '2019-12-01',
             'startTime' => '09:00:00',
             'endTime' => '14:00:00',
             'days' => 'Sábados',
             'maxQuota' => '30',
             'currentQuota' => '1',
             'cost1' => '900',
             'cost2' => '1600',
             'cost3' => '2500',
             'semester_id' => '1',
             'course_id' => '3',
             'place_id' => '2',
             'type_id' => '3',
        ]);
        Classes::create([
            'startDate' => '2019-11-10',
             'endDate' => '2019-12-01',
             'startTime' => '09:00:00',
             'endTime' => '14:00:00',
             'days' => 'Sábados',
             'maxQuota' => '30',
             'currentQuota' => '1',
             'cost1' => '900',
             'cost2' => '1600',
             'cost3' => '2500',
             'semester_id' => '1',
             'course_id' => '10',
             'place_id' => '2',
             'type_id' => '3',
        ]);
        Classes::create([
            'startDate' => '2019-11-10',
             'endDate' => '2019-12-01',
             'startTime' => '09:00:00',
             'endTime' => '14:00:00',
             'days' => 'Sábados',
             'maxQuota' => '30',
             'currentQuota' => '1',
             'cost1' => '900',
             'cost2' => '1600',
             'cost3' => '2500',
             'semester_id' => '1',
             'course_id' => '4',
             'place_id' => '2',
             'type_id' => '3',
        ]);
    }
}
