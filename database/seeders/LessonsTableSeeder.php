<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Lesson::class, 50)->create();
    }
}


