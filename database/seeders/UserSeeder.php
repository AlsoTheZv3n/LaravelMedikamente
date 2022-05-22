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
                'username' => 'meier',
                'lastname' => 'Meier',
                'firstname' => 'Hans',
                'password' => bcrypt('123'), 
                'role' => 'cherfarzt',
            ],
            [
                'username' => 'rocha',
                'lastname' => 'Rocha',
                'firstname' => 'Rodriges',
                'password' => bcrypt('123'),
                'role' => 'facharzt',
            ],
            [
                'username' => 'mueller',
                'lastname' => 'Mueller',
                'firstname' => 'Markus',
                'password' => bcrypt('123'),
                'role' => 'arzt',
            ],
            [
                'username' => 'ernst',
                'lastname' => 'Ernst',
                'firstname' => 'Ralf',
                'password' => bcrypt('123'),
                'role' => 'arzt',
            ],
            [
                'username' => 'ralphen',
                'lastname' => 'Ralphen',
                'firstname' => 'Polo',
                'password' => bcrypt('123'),
                'role' => 'arzt',
            ]

        ]);
    }
}
