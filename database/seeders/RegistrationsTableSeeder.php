<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegistrationsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Registration::class, 100)->create();
    }
}


