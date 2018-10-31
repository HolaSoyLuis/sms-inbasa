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

        DB::table('centros')->insert([
            'nombre'        =>  'Instituto Básico Por Cooperativa',
            'direccion'     =>  'Aldea San Andrés Chápil',
            'departamento'  =>  'San Marcos',
            'ciudad'        =>  'San Pedro Sacatepéquez',
            'nit'           =>  '',
            'logo'          =>  '',
            'telefono1'     =>  '77605857',
            'telefono2'     =>  '47596857',

        ]);

    }
}
