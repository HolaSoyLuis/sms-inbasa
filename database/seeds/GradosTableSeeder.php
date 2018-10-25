<?php

use Illuminate\Database\Seeder;

class GradosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grados')->insert([
            'grado'      =>  'Primero Básico',
            'jornada_id'      =>  '1',
        ]);
        DB::table('grados')->insert([
            'grado'      =>  'Segundo Básico',
            'jornada_id'      =>  '1',
        ]);
        DB::table('grados')->insert([
            'grado'      =>  'Tercero Básico',
            'jornada_id'      =>  '1',
        ]);

    }
}
