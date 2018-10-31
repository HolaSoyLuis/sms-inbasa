<?php

use Illuminate\Database\Seeder;

class BloquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloques')->insert([
            'bloque'    =>  'Bloque I',
            'nota_min'  =>  '60.00',
            'nota_max'  =>  '100.00'
        ]);

        DB::table('bloques')->insert([
            'bloque'  =>  'Bloque II',
            'nota_min'  =>  '60.00',
            'nota_max'  =>  '100.00'
        ]);

        DB::table('bloques')->insert([
            'bloque'  =>  'Bloque III',
            'nota_min'  =>  '60.00',
            'nota_max'  =>  '100.00'
        ]);

        DB::table('bloques')->insert([
            'bloque'  =>  'Bloque IV',
            'nota_min'  =>  '60.00',
            'nota_max'  =>  '100.00'
        ]);
    }
}
