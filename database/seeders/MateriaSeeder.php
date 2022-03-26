<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'nombre' => 'Español',
            'descripcion' => 'español'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Matemáticas',
            'descripcion' => 'matemáticas'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Civismo',
            'descripcion' => 'civismo'
        ]);
    }
}
