<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'nombre' => 'Grupo 1'
        ]);

        DB::table('grupos')->insert([
            'nombre' => 'Grupo 2'
        ]);
    }
}
