<?php

use Illuminate\Database\Seeder;

class TipoEvaluacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_evaluaciones')->insert([
            'tipo'     =>  'Ordinarias',
        ]);
        DB::table('tipo_evaluaciones')->insert([
            'tipo'     =>  'Recuperación',
        ]);
    }
}
