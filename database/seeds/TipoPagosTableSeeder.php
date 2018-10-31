<?php

use Illuminate\Database\Seeder;

class TipoPagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_pagos')->insert([
            'tipo'     =>  'Inscripción',
            'costo'    =>  25.00,
            'detalle'  =>  'Pago Inscripcion',
        ]);

        DB::table('tipo_pagos')->insert([
            'tipo'     =>  'Mensualidad',
            'costo'    =>  25.00,
            'detalle'  =>  'Pago Mensual',
        ]);
    }
}
