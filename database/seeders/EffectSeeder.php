<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('effects')->insert([

            [
                'name' => 'Linderung Kopfschmerzen',
                'effect_type_id' => 1,
                'drug_id' => 1,
            ],
            [
                'name' => 'Linderung Asthma',
                'effect_type_id' => 2,
                'drug_id' => 2,
            ],
            [
                'name' => 'Kopfschmerzen',
                'effect_type_id' => 3,
                'drug_id' => 3,
            ],
            [
                'name' => 'Hautausschlag',
                'effect_type_id' => 4,
                'drug_id' => 4,
            ],
            [
                'name' => 'Inflamatory bowl',
                'effect_type_id' => 5,
                'drug_id' => 5,
            ],
            [
                'name' => 'Husten',
                'effect_type_id' => 6,
                'drug_id' => 6,
            ],

        ]);
    }
}
