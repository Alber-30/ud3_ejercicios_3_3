<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AlumnosTableSeeder::class,
            AsignaturasTableSeeder::class,
            NotasTableSeeder::class,
        ]);
    }
}

