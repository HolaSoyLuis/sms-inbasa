<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creación de roles por defecto
        //Rol No. 1
        Role::create([
            'name'          =>  'Admin',
            'slug'          =>  'admin',
            'description'   => 'Rol para Administrador del Sistema por defecto con todos los permisos sobre agregar, editar, ver y eliminar.',
            'special'       =>  'all-access'
        ]);

        //Rol No. 2
        Role::create([
            'name'          =>  'Docente',
            'slug'          =>  'docente',
            'description'   =>  'Rol creado por defecto para el acceso de los docentes únicamente a su módulo.'
        ]);

        //Rol No. 3
        Role::create([
            'name'          =>  'Estudiante',
            'slug'          =>  'estudiante',
            'description'   =>  'Rol por defecto para los estudiantes del centro educativo.'
        ]);
        
        //Rol No. 4
        Role::create([
            'name'          =>  'Encargado',
            'slug'          =>  'encargado',
            'description'   =>  'Rol por defecto para encargados de estudiantes.'
        ]);

        //Rol No. 5
        Role::create([
            'name'          =>  'Secretaría',
            'slug'          =>  'secretaria',
            'description'   =>  'Rol creado por defecto para el personal de secretaría. Accede únicamente al módulo de Gestión Económica.'
        ]);

        //Creación de usuarios por defecto
        //Usuario No. 1
        DB::table('users')->insert([
            'username'      =>  'admin',
            'password'      =>  bcrypt('admin@12')
        ]);

        //Usuario No. 2
        DB::table('users')->insert([
            'username'      =>  'docente',
            'password'      =>  bcrypt('docente@12')
        ]);

        //Usuario No. 3
        DB::table('users')->insert([
            'username'      =>  'estudiante',
            'password'      =>  bcrypt('estudiante@12')
        ]);

        //Usuario No. 4
        DB::table('users')->insert([
            'username'      =>  'encargado',
            'password'      =>  bcrypt('encargado@12')
        ]);

        //Usuario No. 5
        DB::table('users')->insert([
            'username'      =>  'secretaria',
            'password'      =>  bcrypt('secretaria@12')
        ]);


        //Asignación de roles a los usuarios por defecto
        DB::table('role_user')->insert([
            'role_id'      =>  '1',
            'user_id'      =>  '1'
        ]);

        DB::table('role_user')->insert([
            'role_id'      =>  '2',
            'user_id'      =>  '2'
        ]);

        DB::table('role_user')->insert([
            'role_id'      =>  '3',
            'user_id'      =>  '3'
        ]);

        DB::table('role_user')->insert([
            'role_id'      =>  '4',
            'user_id'      =>  '4'
        ]);

        DB::table('role_user')->insert([
            'role_id'      =>  '5',
            'user_id'      =>  '5'
        ]);


        //Asignación de permisos a los roles por defecto excepto admin
        /*
            Inicio - Permisos para el Rol de Docente
        */
        //Permisos para ver Inicio
        DB::table('permission_role')->insert([
            'permission_id'     =>  '1',
            'role_id'           =>  '2'
        ]);

        //Permisos para navegar, ver y editar cursos
        DB::table('permission_role')->insert([
            'permission_id'     =>  '66',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '67',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '68',
            'role_id'           =>  '2'
        ]);

        //Permisos para navegar y ver horario de clases
        DB::table('permission_role')->insert([
            'permission_id'     =>  '69',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '70',
            'role_id'           =>  '2'
        ]);

        //Permisos para navegar, ver, editar y eliminar notas de estudiantes
        DB::table('permission_role')->insert([
            'permission_id'     =>  '74',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '75',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '76',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '77',
            'role_id'           =>  '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '78',
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
            'permission_id'     =>  '79',
            'role_id'           =>  '3'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '80',
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
            'permission_id'     =>  '81',
            'role_id'           =>  '4'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '82',
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

        //Permisos para navegar, ver, editar, crear y eliminar pagos de colegiaturas
        DB::table('permission_role')->insert([
            'permission_id'     =>  '88',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '89',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '90',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '91',
            'role_id'           =>  '5'
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  '92',
            'role_id'           =>  '5'
        ]);
        /*
            Fin Permisos Rol de Secretaría
        */
    }
}
