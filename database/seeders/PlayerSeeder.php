<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            DB::table('players')->insert([
                [
                    'firstname' => 'Neymar',
                    'lastname' => 'Junior',
                    'age' => 28,
                    'poids' => 69,
                    'long' => 178,
                    'foot' => 'Right',
                    'team_id' => 1
                ],
                [
                    'firstname' => 'CR7',
                    'lastname' => 'ROnaldo',
                    'age' => 28,
                    'poids' => 69,
                    'long' => 178,
                    'foot' => 'Right',
                    'team_id' => 2
                ],
                [
                    'firstname' => 'Messi',
                    'lastname' => 'Lionel',
                    'age' => 28,
                    'poids' => 69,
                    'long' => 178,
                    'foot' => 'Left',
                    'team_id' => 3
                ],
                [
                    'firstname' => 'Buffon',
                    'lastname' => 'Buffon',
                    'age' => 28,
                    'poids' => 69,
                    'long' => 194,
                    'foot' => 'Right',
                    'team_id' => 4
                ],
                [
                    'firstname' => 'Hakimi',
                    'lastname' => 'achraf',
                    'age' => 25,
                    'poids' => 74,
                    'long' => 180,
                    'foot' => 'left',
                    'team_id' => 3
                ],
            ]);
    }
}
