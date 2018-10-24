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
        $this->call(CargosTableSeeder::class);
        $this->call(CentrosTableSeeder::class);
        $this->call(DiasTableSeeder::class);
        $this->call(FormaPagosTableSeeder::class);                
        $this->call(JornadasTableSeeder::class);        
        $this->call(GradosTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(SeccionesTableSeeder::class);
        $this->call(TipoEvaluacionesTableSeeder::class);
        $this->call(TipoPagosTableSeeder::class);
        $this->call(UsersTableSeeder::class);                
        //$this->call(PermissionRolesTableSeeder::class);
    }
}
