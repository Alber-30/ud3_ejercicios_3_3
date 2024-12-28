<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosTableSeeder extends Seeder
{
    public function run(): void
    {
        $alumnos = [
            [
                'nombre' => 'Alberto Pérez',
                'apellido' => 'Pérez',
                'email' => 'Alber.perez@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María González',
                'apellido' => 'González',
                'email' => 'maria.gonzalez@hotmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos López',
                'apellido' => 'López',
                'email' => 'carlos.lopez@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($alumnos as $alumno) {
            DB::table('alumnos')->updateOrInsert(
                ['email' => $alumno['email']], // Busca por email
                $alumno // Actualiza o inserta
            );
        }
    }
}
