<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['alumno_id' => 1, 'titulo' => 'Post de Alberto', 'contenido' => 'Contenido de Alberto', 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 2, 'titulo' => 'Post de María', 'contenido' => 'Contenido de María', 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 3, 'titulo' => 'Post de Carlos', 'contenido' => 'Contenido de Carlos', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
