<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre' => 'Julio',
            'apellidos' => 'Perez',
            'fecha_nacimiento' => '1998-05-12',
            'correo' => 'julio@test.mx',
            'grupo_id' => '1'
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'Monica',
            'apellidos' => 'Alvarez',
            'fecha_nacimiento' => '1999-12-24',
            'correo' => 'monica@test.mx',
            'grupo_id' => '1'
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'Pedro',
            'apellidos' => 'Medina',
            'fecha_nacimiento' => '2001-02-15',
            'correo' => 'pedro@test.mx',
            'grupo_id' => '1'
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'Belen',
            'apellidos' => 'Acuña',
            'fecha_nacimiento' => '1995-06-10',
            'correo' => 'belen@test.mx',
            'grupo_id' => '2'
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'Carlos',
            'apellidos' => 'Rojas',
            'fecha_nacimiento' => '2002-10-03',
            'correo' => 'carlos@test.mx',
            'grupo_id' => '2'
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'Valeria',
            'apellidos' => 'Cervantes',
            'fecha_nacimiento' => '1997-08-11',
            'correo' => 'valeria@test.mx',
            'grupo_id' => '2'
        ]);
    }
}
