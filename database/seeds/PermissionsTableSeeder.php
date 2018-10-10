<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*  PERMISOS PARA 
            MODULO DE ADMINISTRACIÓN
            POR APARTADOS
        */

        //Home - Datos generales
        Permission::create([
            'name'          => 'Navegar en Inicio',
            'slug'          => 'inicio.index',
            'description'   => 'Navega y lista datos generales de administración',
        ]);


        //Usuarios
        Permission::create([
            'name'          => 'Navegar en Usuarios',
            'slug'          => 'usuarios.index',
            'description'   => 'Navega y lista los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Usuarios',
            'slug'          => 'usuarios.show',
            'description'   => 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de Usuarios',
            'slug'          => 'usuarios.create',
            'description'   => 'Crear usuarios en el sistema',
        ]);

        Permission::create([
            'name'          => 'Editar Usuarios',
            'slug'          => 'usuarios.edit',
            'description'   => 'Editar datos de un usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar Usuarios',
            'slug'          => 'usuarios.destroy',
            'description'   => 'Elimina usuarios dentro del sistema',
        ]);

        //Roles y Permisos
        Permission::create([
            'name'          => 'Navegar en Roles y Permisos',
            'slug'          => 'roles.index',
            'description'   => 'Navega y lista los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Roles',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de Roles',
            'slug'          => 'roles.create',
            'description'   => 'Crear roles para los usuarios en el sistema',
        ]);

        Permission::create([
            'name'          => 'Editar Roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar datos de un rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar Roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Elimina roles dentro del sistema',
        ]);

        //Personal
        Permission::create([
            'name'          => 'Navegar en Personal',
            'slug'          => 'personal.index',
            'description'   => 'Navega y lista el personal del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Personal',
            'slug'          => 'personal.show',
            'description'   => 'Ver datos de un personal del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Crear Personal',
            'slug'          => 'personal.create',
            'description'   => 'Crear personal para el centro educativo',
        ]);

        Permission::create([
            'name'          => 'Editar Personal',
            'slug'          => 'personal.edit',
            'description'   => 'Editar datos de un personal del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Eliminar Personal',
            'slug'          => 'personal.destroy',
            'description'   => 'Eliminar personal del centro educativo',
        ]);

        //Estudiantes 
        Permission::create([
            'name'          => 'Navegar en Estudiantes',
            'slug'          => 'estudiantes.index',
            'description'   => 'Navega y lista los estudiantes del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Estudiantes',
            'slug'          => 'estudiantes.show',
            'description'   => 'Ver datos de un estudiante',
        ]);

        Permission::create([
            'name'          => 'Crear Estudiantes',
            'slug'          => 'estudiantes.create',
            'description'   => 'Crear estudiantes para el centro educativo',
        ]);

        Permission::create([
            'name'          => 'Editar Estudiantes',
            'slug'          => 'estudiantes.edit',
            'description'   => 'Editar datos de un estudiante del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Eliminar Estudiantes',
            'slug'          => 'estudiantes.destroy',
            'description'   => 'Eliminar estudiantes del sistema',
        ]);

        //Ciclos y Bimestre
        Permission::create([
            'name'          => 'Navegar en Ciclo y/o Bimestre',
            'slug'          => 'ciclosbim.index',
            'description'   => 'Navega y lista los ciclos y bimestres',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Ciclos y/o Bimestres',
            'slug'          => 'ciclosbim.show',
            'description'   => 'Ver datos de un ciclo o bimestre',
        ]);

        Permission::create([
            'name'          => 'Crear Ciclos y/o Bimestres',
            'slug'          => 'ciclosbim.create',
            'description'   => 'Crear ciclos escolares y bimestres',
        ]);

        Permission::create([
            'name'          => 'Editar Ciclos y/o Bimestres',
            'slug'          => 'ciclosbim.edit',
            'description'   => 'Editar datos de un ciclo o bimestre',
        ]);

        Permission::create([
            'name'          => 'Eliminar Ciclos y/o Bimestres',
            'slug'          => 'ciclosbim.destroy',
            'description'   => 'Eliminar ciclos escolares y bimestres',
        ]);

        //Grados 
        Permission::create([
            'name'          => 'Navegar en Grados',
            'slug'          => 'grados.index',
            'description'   => 'Navega y lista los grados registrados',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Grados',
            'slug'          => 'grados.show',
            'description'   => 'Ver datos de un grado',
        ]);

        Permission::create([
            'name'          => 'Crear Grados',
            'slug'          => 'grados.create',
            'description'   => 'Crear grados para el centro educativo',
        ]);

        Permission::create([
            'name'          => 'Editar Grados',
            'slug'          => 'grados.edit',
            'description'   => 'Editar datos de un grado del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Eliminar Grados',
            'slug'          => 'grados.destroy',
            'description'   => 'Eliminar grados del centro educativo',
        ]);

        //Cursos
        Permission::create([
            'name'          => 'Navegar en Cursos',
            'slug'          => 'cursos.index',
            'description'   => 'Navega y lista los cursos registrados',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Cursos',
            'slug'          => 'cursos.show',
            'description'   => 'Ver datos de un curso',
        ]);

        Permission::create([
            'name'          => 'Crear Cursos',
            'slug'          => 'cursos.create',
            'description'   => 'Crear cursos para los distintos grados',
        ]);

        Permission::create([
            'name'          => 'Editar Cursos',
            'slug'          => 'cursos.edit',
            'description'   => 'Editar datos de un curso específico',
        ]);

        Permission::create([
            'name'          => 'Eliminar Cursos',
            'slug'          => 'cursos.destroy',
            'description'   => 'Eliminar un curso de acuerdo al grado',
        ]);

        //Centro Educativo - Datos del centro educativo
        Permission::create([
            'name'          => 'Navegar en Centro Educativo',
            'slug'          => 'centros.index',
            'description'   => 'Navega en el apartado el centro educativo',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Centro Educativo',
            'slug'          => 'centros.show',
            'description'   => 'Ver datos del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Crear Centro Educativo',
            'slug'          => 'centros.create',
            'description'   => 'Crear datos para el centro educativo',
        ]);

        Permission::create([
            'name'          => 'Editar Centro Educativo',
            'slug'          => 'centros.edit',
            'description'   => 'Editar datos del centro educativo',
        ]);

        Permission::create([
            'name'          => 'Eliminar Centro Educativo',
            'slug'          => 'centros.destroy',
            'description'   => 'Eliminar datos del centro educativo',
        ]);

        //Backups o Respaldos 
        Permission::create([
            'name'          => 'Navegar en Respaldos',
            'slug'          => 'respaldos.index',
            'description'   => 'Navega y lista los respaldos de la información',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Respaldos',
            'slug'          => 'respaldos.show',
            'description'   => 'Ver datos de un respaldo creado',
        ]);

        Permission::create([
            'name'          => 'Crear Respaldos',
            'slug'          => 'respaldos.create',
            'description'   => 'Crear respaldos de la información del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar Respaldos',
            'slug'          => 'respaldos.destroy',
            'description'   => 'Eliminar respaldos de información',
        ]);

        /* FIN PERMISOS MODULO DE ADMINISTRACIÓN */
        
        /*  PERMISOS PARA 
            MODULO DE DOCENTES
            POR APARTADOS
        */

        //Cursos - cursos que imparte el docente
        Permission::create([
            'name'          => 'Navegar en Cursos',
            'slug'          => 'docentes.cursos.index',
            'description'   => 'Navega y lista los cursos que imparte',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Cursos',
            'slug'          => 'docentes.cursos.show',
            'description'   => 'Ver datos de un curso que imparte',
        ]);
        
        Permission::create([
            'name'          => 'Editar Curso',
            'slug'          => 'docentes.cursos.edit',
            'description'   => 'Editar descripción del curso que imparte',
        ]);

        //Horario - Horario en los que debe impartir clases
        Permission::create([
            'name'          => 'Navegar en Horario',
            'slug'          => 'docentes.horario.index',
            'description'   => 'Muestra el horario de clases para el docente',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Cursos',
            'slug'          => 'docentes.horario.show',
            'description'   => 'Ver detalle de un horario',
        ]);

        /*  Notas
            Para que el docente agregue notas para cada estudiante de acuerdo
            a los grados, secciones y cursos que imparte
        */
        Permission::create([
            'name'          => 'Navegar en Notas',
            'slug'          => 'notas.index',
            'description'   => 'Navega y lista las notas de los alumnos',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Notas',
            'slug'          => 'notas.show',
            'description'   => 'Ver datos de una nota',
        ]);

        Permission::create([
            'name'          => 'Registrar Notas',
            'slug'          => 'notas.create',
            'description'   => 'Registra notas para cada estudiante',
        ]);

        Permission::create([
            'name'          => 'Editar Notas',
            'slug'          => 'notas.edit',
            'description'   => 'Editar datos de una nota de estudiante',
        ]);

        Permission::create([
            'name'          => 'Eliminar Notas',
            'slug'          => 'notas.destroy',
            'description'   => 'Eliminar notas de estudiantes',
        ]);

        /* FIN DE PERMISOS PARA MÓDULO DE DOCENTES */


        /*  PERMISOS PARA 
            MODULO DE GESTIÓN ECONÓMICA
            POR APARTADOS
        */
        // Inscripciones
        Permission::create([
            'name'          => 'Navegar en Inscripciones',
            'slug'          => 'inscripciones.index',
            'description'   => 'Navega y lista las inscripciones',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Inscripciones',
            'slug'          => 'inscripciones.show',
            'description'   => 'Ver datos de una inscripción',
        ]);

        Permission::create([
            'name'          => 'Registrar una Inscripción',
            'slug'          => 'inscripciones.create',
            'description'   => 'Registra inscripciones de alumnos',
        ]);

        Permission::create([
            'name'          => 'Editar Inscripciones',
            'slug'          => 'inscripciones.edit',
            'description'   => 'Editar datos de una inscripción',
        ]);

        Permission::create([
            'name'          => 'Eliminar Inscripciones',
            'slug'          => 'inscripciones.destroy',
            'description'   => 'Elimina inscripciones de alumnos',
        ]);

        // Colegiatura
        Permission::create([
            'name'          => 'Navegar en Colegiatura',
            'slug'          => 'colegiaturas.index',
            'description'   => 'Navega y lista los pagos de colegiaturas',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Colegiaturas',
            'slug'          => 'colegiaturas.show',
            'description'   => 'Ver datos de una colegiatura',
        ]);

        Permission::create([
            'name'          => 'Registrar Colegiaturas',
            'slug'          => 'colegiaturas.create',
            'description'   => 'Registra pagos de colegiatura',
        ]);

        Permission::create([
            'name'          => 'Editar Colegiaturas',
            'slug'          => 'colegiaturas.edit',
            'description'   => 'Editar pagos de colegiaturas',
        ]);

        Permission::create([
            'name'          => 'Eliminar Colegiatura',
            'slug'          => 'colegiaturas.destroy',
            'description'   => 'Elimina pago de una colegiatura',
        ]);

        // Gestión de Costos
        Permission::create([
            'name'          => 'Navegar en Gestión de Costos',
            'slug'          => 'costos.index',
            'description'   => 'Navega y lista los costos de inscripción y/o colegiatura',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de Costos',
            'slug'          => 'costos.show',
            'description'   => 'Ver datos de los costos de inscripción y/o colegiatura',
        ]);

        Permission::create([
            'name'          => 'Registrar Costos',
            'slug'          => 'costos.create',
            'description'   => 'Registra el costo de la inscripción y colegiatura',
        ]);

        Permission::create([
            'name'          => 'Editar Costos',
            'slug'          => 'costos.edit',
            'description'   => 'Editar el costo de la inscripción y colegiatura',
        ]);

        Permission::create([
            'name'          => 'Eliminar Costos',
            'slug'          => 'costos.destroy',
            'description'   => 'Elimina el costo de inscripción y/o colegiatura',
        ]);

        /* FIN PERMISO DE MÓDULO DE GESTIÓN ECONÓMICA */


        /*  PERMISOS PARA 
            MODULO DE ESTUDIANTES
            POR APARTADOS
        */
        //Cursos - cursos que tiene asignados el estudiante
        Permission::create([
            'name'          => 'Navegar en Cursos',
            'slug'          => 'estudiantes.cursos.index',
            'description'   => 'Navega y lista los cursos asignados al estudiante',
        ]);

        //Horario - horario de clases para el estudiante
        Permission::create([
            'name'          => 'Navegar en Horario',
            'slug'          => 'estudiantes.horario.index',
            'description'   => 'Navega y muestra el horario de clases del estudiante',
        ]);
        /* FIN PERMISOS DEL MÓDULO DE ESTUDIANTES */

        /*  PERMISOS PARA 
            MODULO DE ENCARGADOS
            POR APARTADOS
        */
        //Notas - notas de su hijo o estudiante a cargo
        Permission::create([
            'name'          => 'Navegar en Notas',
            'slug'          => 'encargados.notas.index',
            'description'   => 'Navega y muestra la notas del estudiante a cargo',
        ]);

        //Horario - horario de clases de su hijo o estudiante a cargo
        Permission::create([
            'name'          => 'Navegar en Horario',
            'slug'          => 'encargados.horario.index',
            'description'   => 'Navega y muestra el horario de clasees de estudiante a cargo',
        ]);
    }
}
