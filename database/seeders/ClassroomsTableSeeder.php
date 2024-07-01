<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (['a1', 'a2', 'a3', 'a4', 'a5', 'b1', 'b2', 'b3', 'b4', 'b5'] as $name) {
            DB::table('classrooms')->insert([
                'location_id' => rand(1, 3),
                'name' => $name
            ]);
        }
    }
}



