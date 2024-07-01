<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    public function run()
    {
        foreach (['beginner', 'elementary', 'pre-intermediate', 'intermediate', 'upper-intermediate'] as $name) {
            DB::table('branches')->insert([
                'name' => $name
            ]);
        }
    }
}

