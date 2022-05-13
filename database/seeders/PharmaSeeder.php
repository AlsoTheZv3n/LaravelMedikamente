<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('pharmas')->insert([

            [
                'name' => 'Novartis',
            ],
            [
                'name' => 'Roche',
            ],
            [
                'name' => 'Sandoz',
            ],
            [
                'name' => 'Varian',
            ],
            [
                'name' => 'Mendoza',
            ]

        ]);


    }
}
