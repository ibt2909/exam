<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Classroom::class, 10)->create();
    }
}


