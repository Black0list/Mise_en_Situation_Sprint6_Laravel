<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Man City',
                'city' => 'Manchester',
                'country' => 'UK',
                'creation_date' => '1999'
            ],
            [
                'name' => 'PSG',
                'city' => 'Paris',
                'country' => 'France',
                'creation_date' => '1999'
            ],
            [
                'name' => 'RAM',
                'city' => 'Madrid',
                'country' => 'Spain',
                'creation_date' => '1998'
            ],
            [
                'name' => 'FCB',
                'city' => 'Madrid',
                'country' => 'Spain',
                'creation_date' => '1979'
            ]
        ]);
    }
}
