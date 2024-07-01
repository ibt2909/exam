<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (range(1, 50) as $index) {
            DB::table('lessons')->insert([
                'classroom_id' => rand(1, 10),
                'branch_id' => rand(1, 5),
                'teacher_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

