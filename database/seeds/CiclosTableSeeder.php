<?php

use Illuminate\Database\Seeder;

class CiclosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciclos')->insert([
            'fecha_inicio'  =>  '2019-02-16', 
            'fecha_fin'     =>  '2019-10-12'         
        ]);

        DB::table('bloque_ciclo')->insert([
            'ciclo_id'      =>  1, 
            'bloque_id'     =>  1
        ]);

        DB::table('bloque_ciclo')->insert([
            'ciclo_id'      =>  1, 
            'bloque_id'     =>  2         
        ]);

        DB::table('bloque_ciclo')->insert([
            'ciclo_id'      =>  1, 
            'bloque_id'     =>  3
        ]);

        DB::table('bloque_ciclo')->insert([
            'ciclo_id'      =>  1, 
            'bloque_id'     =>  4         
        ]);
    }
}
