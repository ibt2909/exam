<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            LocationsTableSeeder::class,
            ClassroomsTableSeeder::class,
            TeachersTableSeeder::class,
            StudentsTableSeeder::class,
            BranchesTableSeeder::class,
            LessonsTableSeeder::class,
            RegistrationsTableSeeder::class,
        ]);
    }



}
