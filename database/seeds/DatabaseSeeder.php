<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(AspectosTableSeeder::class);
        $this->call(BloquesTableSeeder::class);
        $this->call(CiclosTableSeeder::class);
        $this->call(CentrosTableSeeder::class);
        $this->call(JornadasTableSeeder::class);
        $this->call(GradosTableSeeder::class);
        $this->call(SeccionesTableSeeder::class);
        $this->call(DiasTableSeeder::class);
        $this->call(TipoEvaluacionesTableSeeder::class);
        $this->call(FormaPagosTableSeeder::class);    
        $this->call(TipoPagosTableSeeder::class);
    }
}

