<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drugs')->insert([

            [
                'name' => 'Kortison',
                'price'=> 12.50,
                'user_id' => 1,
                'pharma_id' => 1,
            ],
            [
                'name' => 'Elvanse',
                'price'=> 2.50,
                'user_id' => 1,
                'pharma_id' => 2,
            ],
            [
                'name' => 'Xanax',
                'price'=> 3.60,
                'user_id' => 1,
                'pharma_id' => 3,
            ],
            [
                'name' => 'Paracitamol',
                'price'=> 8.30,
                'user_id' => 1,
                'pharma_id' => 4,
            ],
            [
                'name' => 'Levoceterizin',
                'price'=> 8.40,
                'user_id' => 1,
                'pharma_id' => 5,
            ]

        ]);
    }
}
