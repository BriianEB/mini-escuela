<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clases')->insert([
            'materia_id' => '1',
            'grupo_id' => '1',
            'profesor_id' => '1'
        ]);

        DB::table('clases')->insert([
            'materia_id' => '2',
            'grupo_id' => '2',
            'profesor_id' => '2'
        ]);
    }
}
