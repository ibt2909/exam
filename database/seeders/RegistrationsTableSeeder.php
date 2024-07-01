<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegistrationsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (range(1, 100) as $index) {
            DB::table('registrations')->insert([
                'lesson_id' => rand(1, 50),
                'student_id' => rand(1, 50),
                'price' => rand(100, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

