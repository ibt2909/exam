<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Student::class, 50)->create();
    }
}

