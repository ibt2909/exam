<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Branch::class, 5)->create();
    }
}


