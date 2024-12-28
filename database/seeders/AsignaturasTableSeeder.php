<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'descripcion' => 'Probabilidad', 'created_at' => 		 now(), 'updated_at' => now()],

            ['nombre' => 'Historia', 'descripcion' => 'Historia mundial', 				'created_at' => now(), 'updated_at' => now()],

            ['nombre' => 'Mecánica', 'descripcion' => 'Conceptos básicos de mecánica', 			'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
