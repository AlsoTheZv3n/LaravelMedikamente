<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
                'drug_id' => 1,
            ],
            [
                'name' => 'Linderung Asthma',
                'drug_id' => 2,
            ],
            [
                'name' => 'Kopfschmerzen',
                'drug_id' => 3,
            ],
            [
                'name' => 'Hautausschlag',
                'drug_id' => 4,
            ],
            [
                'name' => 'Inflamatory bowl',
                'drug_id' => 5,
            ],
            [
                'name' => 'Husten',
                'drug_id' => 6,
            ],
        ]);
    }
}
