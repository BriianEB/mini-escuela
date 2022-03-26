<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert([
            'nombre' => 'Omar',
            'apellidos' => 'Hernández',
            'fecha_nacimiento' => '1983-03-16',
            'correo' => 'omar@test.mx',
            'telefono' => '4839924803'
        ]);

        DB::table('profesores')->insert([
            'nombre' => 'Andrea',
            'apellidos' => 'Vazquez',
            'fecha_nacimiento' => '1989-06-03',
            'correo' => 'andrea@test.mx',
            'telefono' => '4938829154'
        ]);
    }
}
