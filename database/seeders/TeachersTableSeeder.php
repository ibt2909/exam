<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    public function run()
    {
        $teachers = ["Sapar", "Maysa", "Arslan", "Dowlet", "Aman", "Shemshat", "Rowshen", "Aynur", "Suleyman", "Mahri"];
        foreach ($teachers as $name) {
            DB::table('teachers')->insert([
                'first_name' => $name,
                'last_name' => 'Lastname'
            ]);
        }
    }
}

