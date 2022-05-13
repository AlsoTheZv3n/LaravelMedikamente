<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->insert([

            [
                'email' => 'meier.hans@gmail.com',
                'lastname' => 'Meier',
                'firstname' => 'Hans',
                'password' => bcrypt('123'),
            ],
            [
                'email' => 'rocha.rodriges@gmail.com',
                'lastname' => 'Rocha',
                'firstname' => 'Rodriges',
                'password' => bcrypt('123'),
            ],
            [
                'email' => 'mueller.markus@gmail.com',
                'lastname' => 'Mueller',
                'firstname' => 'Markus',
                'password' => bcrypt('123'),
            ],
            [
                'email' => 'ernst.ralf@gmail.com',
                'lastname' => 'Ernst',
                'firstname' => 'Ralf',
                'password' => bcrypt('123'),
            ],
            [
                'email' => 'ralphen.polo@gmail.com',
                'lastname' => 'Ralphen',
                'firstname' => 'Polo',
                'password' => bcrypt('123'),
            ]

        ]);
    }
}
