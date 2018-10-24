<?php

use Illuminate\Database\Seeder;

class CentrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Centro::create([
        //     'nombre'          =>  'Instituto Basico Por Cooperativa',
        //     'direccion'          =>  'Aldea San Andres Chapil',
        //     'departamento'          =>  'San Marcos',
        //     'ciudad'          =>  'San Pedro',
        //     'telefono1'          =>  '34232312',
        // ]);

        DB::table('centros')->insert([
            'nombre'        =>  'Instituto Basico Por Cooperativa',
            'direccion'     =>  'Aldea San Andres Chapil',
            'departamento'  =>  'San Marcos',
            'ciudad'        =>  'San Pedro',
            'nit'           =>  '',
            'logo'          =>  '',
            'telefono1'     =>  '34232312',
            'telefono2'     =>  '12341234',

        ]);

    }
}
