<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            'cargo'      =>  'Director',            
        ]);        
        DB::table('cargos')->insert([
            'cargo'      =>  'Maestro',            
        ]);
        DB::table('cargos')->insert([
            'cargo'      =>  'Secretario',            
        ]);
        DB::table('cargos')->insert([
            'cargo'      =>  'Conserje',            
        ]);
    }
}
