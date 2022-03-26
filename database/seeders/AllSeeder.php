<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GrupoSeeder::class,
            AlumnoSeeder::class,
            ProfesorSeeder::class,
            MateriaSeeder::class,
            ClaseSeeder::class
        ]);
    }
}
