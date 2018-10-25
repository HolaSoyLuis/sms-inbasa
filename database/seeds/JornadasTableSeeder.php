<?php

use Illuminate\Database\Seeder;

class JornadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jornadas')->insert([
            'jornada'      =>  'Vespertina',            
        ]);
    }
}
