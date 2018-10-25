<?php

use Illuminate\Database\Seeder;

class SeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secciones')->insert([
            'seccion'     =>  'A',
            'estado'      =>  '1',
            'grado_id'    =>  '1',
        ]);
        DB::table('secciones')->insert([
            'seccion'     =>  'A',
            'estado'      =>  '1',
            'grado_id'    =>  '2',
        ]);
        DB::table('secciones')->insert([
            'seccion'     =>  'A',
            'estado'      =>  '1',
            'grado_id'    =>  '3',
        ]);

        DB::table('secciones')->insert([
            'seccion'     =>  'B',
            'estado'      =>  '1',
            'grado_id'    =>  '1',
        ]);
        DB::table('secciones')->insert([
            'seccion'     =>  'B',
            'estado'      =>  '1',
            'grado_id'    =>  '2',
        ]);
        DB::table('secciones')->insert([
            'seccion'     =>  'B',
            'estado'      =>  '1',
            'grado_id'    =>  '3',
        ]);

        DB::table('secciones')->insert([
            'seccion'     =>  'C',
            'estado'      =>  '1',
            'grado_id'    =>  '1',
        ]);

        DB::table('secciones')->insert([
            'seccion'     =>  'C',
            'estado'      =>  '1',
            'grado_id'    =>  '2',
        ]);
        DB::table('secciones')->insert([
            'seccion'     =>  'C',
            'estado'      =>  '1',
            'grado_id'    =>  '3',
        ]);
    }
}
