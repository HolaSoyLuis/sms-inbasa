<?php

use Illuminate\Database\Seeder;

class FormaPagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forma_pagos')->insert([
            'forma'      =>  'Efectivo',
            'detalles'   =>  '',
        ]);
    }
}
