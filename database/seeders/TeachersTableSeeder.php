<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Teacher::class, 10)->create();
    }
}

