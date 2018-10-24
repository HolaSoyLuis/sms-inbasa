<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class PermissionRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Asignación de permisos a los roles por defecto excepto admin
        /*
            Inicio Permisos para el Rol de Docente
        */
        //Permisos para ver Inicio
        DB::table('permission_role')->insert([
            'permission_id'     =>  '1',
            'role_id'           =>  '2'
        ]);

        //Permisos para navegar y ver cursos
        DB::table('permission_role')->insert([
            'permission_id'     =>  '61',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '62',
            'role_id'           =>  '2'
        ]);

        //Permisos para navegar y ver horario de clases
        DB::table('permission_role')->insert([
            'permission_id'     =>  '64',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '65',
            'role_id'           =>  '2'
        ]);

        //Permisos para navegar, ver, editar y eliminar notas de estudiantes
        DB::table('permission_role')->insert([
            'permission_id'     =>  '69',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '70',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '71',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '72',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '73',
            'role_id'           =>  '2'
        ]);
        /*
            Fin Permisos Rol de Docente
        */


        /* 
            Inicio Permisos para el Rol de Estudiante
        */
        //Permisos para navegar en cursos y horarios que tenga asignados el estudiante
        DB::table('permission_role')->insert([
            'permission_id'     =>  '74',
            'role_id'           =>  '3'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '75',
            'role_id'           =>  '3'
        ]);
        /*
            Fin Permisos Rol de Estudiante
        */


        /* 
            Inicio Permisos para el Rol de Encargado
        */
        //Permisos para navegar en notas y horario de clases de los hijos que tenga el encargado
        DB::table('permission_role')->insert([
            'permission_id'     =>  '76',
            'role_id'           =>  '4'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '77',
            'role_id'           =>  '4'
        ]);
        /*
            Fin Permisos Rol de Encargado
        */


        /* 
            Inicio Permisos para el Rol de Secretaría
        */
        //Permisos para navegar, ver, crear, editar y eliminar inscripciones de estudiantes
        DB::table('permission_role')->insert([
            'permission_id'     =>  '78',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '79',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '80',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '81',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '82',
            'role_id'           =>  '5'
        ]);

        //Permisos para navegar, ver, editar, crear y eliminar pagos de colegiaturas
        DB::table('permission_role')->insert([
            'permission_id'     =>  '83',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '84',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '85',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '86',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '87',
            'role_id'           =>  '5'
        ]);
        /*
            Fin Permisos Rol de Secretaría
        */
    }
}
