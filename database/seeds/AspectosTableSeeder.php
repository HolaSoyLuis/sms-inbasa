<?php

use Illuminate\Database\Seeder;

class AspectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aspectos')->insert([
            'aspecto'		=>  'Actitudinal', 
            'nota_minima'	=>  0,
            'nota_maxima'	=>  30
        ]);

        DB::table('aspectos')->insert([
            'aspecto'		=>  'Declarativo', 
            'nota_minima'	=>  0,
            'nota_maxima'	=>  40
        ]);

        DB::table('aspectos')->insert([
            'aspecto'		=>  'Procedimental', 
            'nota_minima'	=>  0,
            'nota_maxima'	=>  30
        ]);
    }
}
