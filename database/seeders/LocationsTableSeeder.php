<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->insert([
            ['name' => 'uniwermag'],
            ['name' => 'mir 1 sahamca'],
            ['name' => 'anew']
        ]);
    }
}

