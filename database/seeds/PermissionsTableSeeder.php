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

        //1. Home - Datos generales
        Permission::create([
            'name'          => 'Navegar en Inicio',
            'slug'          => 'inicio.index',
            'description'   => 'Navega y lista datos generales de administración',
        ]);


        //2. Usuarios
        Permission::create([
            'name'          => 'Navegar en Usuarios',
            'slug'          => 'usuarios.index',
            'description'   => 'Navega y lista los usuarios del sistema',
        ]);
        
        //3
        Permission::create([
            'name'          => 'Ver detalle de Usuarios',
            'slug'          => 'usuarios.show',
            'description'   => 'Ver en detalle cada usuario del sistema',
        ]);

        //4
        Permission::create([
            'name'          => 'Creación de Usuarios',
            'slug'          => 'usuarios.create',
            'description'   => 'Crear usuarios en el sistema',
        ]);

        //5
        Permission::create([
            'name'          => 'Editar Usuarios',
            'slug'          => 'usuarios.edit',
            'description'   => 'Editar datos de un usuario del sistema',
        ]);
        
        //6
        Permission::create([
            'name'          => 'Eliminar Usuarios',
            'slug'          => 'usuarios.destroy',
            'description'   => 'Elimina usuarios dentro del sistema',
        ]);

        //7. Roles y Permisos
        Permission::create([
            'name'          => 'Navegar en Roles y Permisos',
            'slug'          => 'roles.index',
            'description'   => 'Navega y lista los roles del sistema',
        ]);

        //8
        Permission::create([
            'name'          => 'Ver detalle de Roles',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema',
        ]);
        
        //9
        Permission::create([
            'name'          => 'Creación de Roles',
            'slug'          => 'roles.create',
            'description'   => 'Crear roles para los usuarios en el sistema',
        ]);

        //10
        Permission::create([
            'name'          => 'Editar Roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar datos de un rol del sistema',
        ]);

        //11
        Permission::create([
            'name'          => 'Eliminar Roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Elimina roles dentro del sistema',
        ]);

        //12. Personal
        Permission::create([
            'name'          => 'Navegar en Personal',
            'slug'          => 'personal.index',
            'description'   => 'Navega y lista el personal del centro educativo',
        ]);

        //13
        Permission::create([
            'name'          => 'Ver detalle de Personal',
            'slug'          => 'personal.show',
            'description'   => 'Ver datos de un personal del centro educativo',
        ]);

        //14
        Permission::create([
            'name'          => 'Crear Personal',
            'slug'          => 'personal.create',
            'description'   => 'Crear personal para el centro educativo',
        ]);

        //15
        Permission::create([
            'name'          => 'Editar Personal',
            'slug'          => 'personal.edit',
            'description'   => 'Editar datos de un personal del centro educativo',
        ]);

        //16
        Permission::create([
            'name'          => 'Eliminar Personal',
            'slug'          => 'personal.destroy',
            'description'   => 'Eliminar personal del centro educativo',
        ]);

        //17 Permisos para agregar, eliminar, editar, actualizar cargos 
        Permission::create([
            'name'          => 'Navegar en Cargos',
            'slug'          => 'cargos.index',
            'description'   => 'Navega y lista los cargos registrados',
        ]);

        //18
        Permission::create([
            'name'          => 'Ver detalle de Cargos',
            'slug'          => 'cargos.show',
            'description'   => 'Ver un cargo creado',
        ]);

        //19
        Permission::create([
            'name'          => 'Crear Cargos',
            'slug'          => 'cargos.create',
            'description'   => 'Crear cargos para el personal del centro educativo',
        ]);

        //20
        Permission::create([
            'name'          => 'Editar Cargos',
            'slug'          => 'cargos.edit',
            'description'   => 'Editar un cargo registrado',
        ]);

        //21
        Permission::create([
            'name'          => 'Eliminar Cargos',
            'slug'          => 'cargos.destroy',
            'description'   => 'Eliminar cargos',
        ]);

        //22 Estudiantes 
        Permission::create([
            'name'          => 'Navegar en Estudiantes',
            'slug'          => 'estudiantes.index',
            'description'   => 'Navega y lista los estudiantes del centro educativo',
        ]);

        //23
        Permission::create([
            'name'          => 'Ver detalle de Estudiantes',
            'slug'          => 'estudiantes.show',
            'description'   => 'Ver datos de un estudiante',
        ]);

        //24
        Permission::create([
            'name'          => 'Crear Estudiantes',
            'slug'          => 'estudiantes.create',
            'description'   => 'Crear estudiantes para el centro educativo',
        ]);

        //25
        Permission::create([
            'name'          => 'Editar Estudiantes',
            'slug'          => 'estudiantes.edit',
            'description'   => 'Editar datos de un estudiante del centro educativo',
        ]);

        //26
        Permission::create([
            'name'          => 'Eliminar Estudiantes',
            'slug'          => 'estudiantes.destroy',
            'description'   => 'Eliminar estudiantes del sistema',
        ]);

        //27 Ciclos
        Permission::create([
            'name'          => 'Navegar en Ciclos',
            'slug'          => 'ciclos.index',
            'description'   => 'Navega y lista los ciclos y bimestres',
        ]);

        //28
        Permission::create([
            'name'          => 'Ver detalle de Ciclos',
            'slug'          => 'ciclos.show',
            'description'   => 'Ver datos de un ciclo',
        ]);

        //29
        Permission::create([
            'name'          => 'Crear Ciclos',
            'slug'          => 'ciclos.create',
            'description'   => 'Crear ciclos escolares',
        ]);

        //30
        Permission::create([
            'name'          => 'Editar Ciclos',
            'slug'          => 'ciclos.edit',
            'description'   => 'Editar datos de un ciclo',
        ]);

        //31
        Permission::create([
            'name'          => 'Eliminar Ciclos',
            'slug'          => 'ciclos.destroy',
            'description'   => 'Eliminar ciclos escolares',
        ]);

        //32 Bloques o Unidades
        Permission::create([
            'name'          => 'Navegar en Bloques',
            'slug'          => 'bloques.index',
            'description'   => 'Navega y lista los ciclos y bloques',
        ]);

        //33
        Permission::create([
            'name'          => 'Ver detalle de Bloques',
            'slug'          => 'bloques.show',
            'description'   => 'Ver datos de un bloque (unidad)',
        ]);

        //34
        Permission::create([
            'name'          => 'Crear Bloques',
            'slug'          => 'bloques.create',
            'description'   => 'Crear bloques',
        ]);

        //35
        Permission::create([
            'name'          => 'Editar Bloques',
            'slug'          => 'bloques.edit',
            'description'   => 'Editar datos de un bloque',
        ]);

        //36
        Permission::create([
            'name'          => 'Eliminar Bloques',
            'slug'          => 'bloques.destroy',
            'description'   => 'Eliminar bloques',
        ]);

        //37 Grados 
        Permission::create([
            'name'          => 'Navegar en Grados',
            'slug'          => 'grados.index',
            'description'   => 'Navega y lista los grados registrados',
        ]);

        //38
        Permission::create([
            'name'          => 'Ver detalle de Grados',
            'slug'          => 'grados.show',
            'description'   => 'Ver datos de un grado',
        ]);

        //39
        Permission::create([
            'name'          => 'Crear Grados',
            'slug'          => 'grados.create',
            'description'   => 'Crear grados para el centro educativo',
        ]);

        //40
        Permission::create([
            'name'          => 'Editar Grados',
            'slug'          => 'grados.edit',
            'description'   => 'Editar datos de un grado del centro educativo',
        ]);

        //41
        Permission::create([
            'name'          => 'Eliminar Grados',
            'slug'          => 'grados.destroy',
            'description'   => 'Eliminar grados del centro educativo',
        ]);

        //42 Secciones
        Permission::create([
            'name'          => 'Navegar en Secciones',
            'slug'          => 'secciones.index',
            'description'   => 'Navega y lista las secciones registradas',
        ]);

        //43
        Permission::create([
            'name'          => 'Ver detalle de Secciones',
            'slug'          => 'secciones.show',
            'description'   => 'Ver una sección',
        ]);

        //44
        Permission::create([
            'name'          => 'Crear Secciones',
            'slug'          => 'secciones.create',
            'description'   => 'Crear secciones para cada grado',
        ]);

        //45
        Permission::create([
            'name'          => 'Editar Secciones',
            'slug'          => 'secciones.edit',
            'description'   => 'Editar la letra de una sección',
        ]);

        //46
        Permission::create([
            'name'          => 'Eliminar Secciones',
            'slug'          => 'secciones.destroy',
            'description'   => 'Eliminar secciones de un grado',
        ]);

        //47 Cursos
        Permission::create([
            'name'          => 'Navegar en Cursos',
            'slug'          => 'cursos.index',
            'description'   => 'Navega y lista los cursos registrados',
        ]);

        //48
        Permission::create([
            'name'          => 'Ver detalle de Cursos',
            'slug'          => 'cursos.show',
            'description'   => 'Ver datos de un curso',
        ]);

        //49
        Permission::create([
            'name'          => 'Crear Cursos',
            'slug'          => 'cursos.create',
            'description'   => 'Crear cursos para los distintos grados',
        ]);

        //50
        Permission::create([
            'name'          => 'Editar Cursos',
            'slug'          => 'cursos.edit',
            'description'   => 'Editar datos de un curso específico',
        ]);

        //51
        Permission::create([
            'name'          => 'Eliminar Cursos',
            'slug'          => 'cursos.destroy',
            'description'   => 'Eliminar un curso de acuerdo al grado',
        ]);

        //52 Centro Educativo - Datos del centro educativo
        Permission::create([
            'name'          => 'Navegar en Centro Educativo',
            'slug'          => 'centros.index',
            'description'   => 'Navega en el apartado el centro educativo',
        ]);

        //53
        Permission::create([
            'name'          => 'Ver detalle de Centro Educativo',
            'slug'          => 'centros.show',
            'description'   => 'Ver datos del centro educativo',
        ]);

        //54
        Permission::create([
            'name'          => 'Crear Centro Educativo',
            'slug'          => 'centros.create',
            'description'   => 'Crear datos para el centro educativo',
        ]);

        //55
        Permission::create([
            'name'          => 'Editar Centro Educativo',
            'slug'          => 'centros.edit',
            'description'   => 'Editar datos del centro educativo',
        ]);

        //56
        Permission::create([
            'name'          => 'Eliminar Centro Educativo',
            'slug'          => 'centros.destroy',
            'description'   => 'Eliminar datos del centro educativo',
        ]);

        //57 Backups o Respaldos 
        Permission::create([
            'name'          => 'Navegar en Respaldos',
            'slug'          => 'respaldos.index',
            'description'   => 'Navega y lista los respaldos de la información',
        ]);

        //58
        Permission::create([
            'name'          => 'Ver detalle de Respaldos',
            'slug'          => 'respaldos.show',
            'description'   => 'Ver datos de un respaldo creado',
        ]);

        //59
        Permission::create([
            'name'          => 'Crear Respaldos',
            'slug'          => 'respaldos.create',
            'description'   => 'Crear respaldos de la información del sistema',
        ]);

        //60
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

        //61 Cursos - cursos que imparte el docente
        Permission::create([
            'name'          => 'Navegar en Cursos',
            'slug'          => 'docentes.cursos.index',
            'description'   => 'Navega y lista los cursos que imparte',
        ]);

        //62
        Permission::create([
            'name'          => 'Ver detalle de Cursos',
            'slug'          => 'docentes.cursos.show',
            'description'   => 'Ver datos de un curso que imparte',
        ]);
        
        //63
        Permission::create([
            'name'          => 'Editar Curso',
            'slug'          => 'docentes.cursos.edit',
            'description'   => 'Editar descripción del curso que imparte',
        ]);

        //64 Horario - Horario en los que debe impartir clases
        Permission::create([
            'name'          => 'Navegar en Horario',
            'slug'          => 'docentes.horario.index',
            'description'   => 'Muestra el horario de clases para el docente',
        ]);

        //65
        Permission::create([
            'name'          => 'Ver detalle de Cursos',
            'slug'          => 'docentes.horario.show',
            'description'   => 'Ver detalle de un horario',
        ]);

        //66
        Permission::create([
            'name'          => 'Editar Horario de Docentes',
            'slug'          => 'docentes.horario.create',
            'description'   => 'Editar horario de cursos que imparte un docente',
        ]);

        //67
        Permission::create([
            'name'          => 'Editar Horarios',
            'slug'          => 'docentes.horario.edit',
            'description'   => 'Editar un horario de clases',
        ]);

        //68
        Permission::create([
            'name'          => 'Eliminar Horario de Clases',
            'slug'          => 'docentes.horario.destroy',
            'description'   => 'Eliminar horario de clases de algún docente seleccionado',
        ]);

        /*  69 Notas
            Para que el docente agregue notas para cada estudiante de acuerdo
            a los cursos que imparte.
        */
        Permission::create([
            'name'          => 'Navegar en Notas',
            'slug'          => 'docentes.notas.index',
            'description'   => 'Navega y lista las notas de los alumnos',
        ]);

        //70
        Permission::create([
            'name'          => 'Ver detalle de Notas',
            'slug'          => 'docentes.notas.show',
            'description'   => 'Ver datos de una nota',
        ]);

        //71
        Permission::create([
            'name'          => 'Registrar Notas',
            'slug'          => 'docentes.notas.create',
            'description'   => 'Registra notas para cada estudiante',
        ]);

        //72
        Permission::create([
            'name'          => 'Editar Notas',
            'slug'          => 'docentes.notas.edit',
            'description'   => 'Editar datos de una nota de estudiante',
        ]);

        //73
        Permission::create([
            'name'          => 'Eliminar Notas',
            'slug'          => 'docentes.notas.destroy',
            'description'   => 'Eliminar notas de estudiantes',
        ]);

        /* FIN DE PERMISOS PARA MÓDULO DE DOCENTES */


        /*  PERMISOS PARA 
            MODULO DE ESTUDIANTES
            POR APARTADOS
        */
        //74  Cursos - cursos que tiene asignados el estudiante
        Permission::create([
            'name'          => 'Navegar en Cursos',
            'slug'          => 'estudiantes.cursos.index',
            'description'   => 'Navega y lista los cursos asignados al estudiante',
        ]);

        //75  Horario - horario de clases para el estudiante
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
        //76.0 
        Permission::create([
            'name'          => 'Navegar en Encargados',
            'slug'          => 'encargados.index',
            'description'   => 'Navega y muestra al encargado',
        ]);    
        //76 Notas - notas de su hijo o estudiante a cargo
        Permission::create([
            'name'          => 'Navegar en Notas',
            'slug'          => 'encargados.notas.index',
            'description'   => 'Navega y muestra la notas del estudiante a cargo',
        ]);

        //77  Horario - horario de clases de su hijo o estudiante a cargo
        Permission::create([
            'name'          => 'Navegar en Horario',
            'slug'          => 'encargados.horario.index',
            'description'   => 'Navega y muestra el horario de clasees de estudiante a cargo',
        ]);



        /*  PERMISOS PARA 
            MODULO DE GESTIÓN ECONÓMICA
            POR APARTADOS
        */
        //78  Inscripciones
        Permission::create([
            'name'          => 'Navegar en Inscripciones',
            'slug'          => 'inscripciones.index',
            'description'   => 'Navega y lista las inscripciones',
        ]);

        //79
        Permission::create([
            'name'          => 'Ver detalle de Inscripciones',
            'slug'          => 'inscripciones.show',
            'description'   => 'Ver datos de una inscripción',
        ]);

        //80
        Permission::create([
            'name'          => 'Registrar una Inscripción',
            'slug'          => 'inscripciones.create',
            'description'   => 'Registra inscripciones de alumnos',
        ]);

        //81
        Permission::create([
            'name'          => 'Editar Inscripciones',
            'slug'          => 'inscripciones.edit',
            'description'   => 'Editar datos de una inscripción',
        ]);

        //82
        Permission::create([
            'name'          => 'Eliminar Inscripciones',
            'slug'          => 'inscripciones.destroy',
            'description'   => 'Elimina inscripciones de alumnos',
        ]);

        //83  Colegiatura
        Permission::create([
            'name'          => 'Navegar en Colegiatura',
            'slug'          => 'colegiaturas.index',
            'description'   => 'Navega y lista los pagos de colegiaturas',
        ]);

        //84
        Permission::create([
            'name'          => 'Ver detalle de Colegiaturas',
            'slug'          => 'colegiaturas.show',
            'description'   => 'Ver datos de una colegiatura',
        ]);

        //85
        Permission::create([
            'name'          => 'Registrar Colegiaturas',
            'slug'          => 'colegiaturas.create',
            'description'   => 'Registra pagos de colegiatura',
        ]);

        //86
        Permission::create([
            'name'          => 'Editar Colegiaturas',
            'slug'          => 'colegiaturas.edit',
            'description'   => 'Editar pagos de colegiaturas',
        ]);

        //87
        Permission::create([
            'name'          => 'Eliminar Colegiatura',
            'slug'          => 'colegiaturas.destroy',
            'description'   => 'Elimina pago de una colegiatura',
        ]);

        //88  Gestión de Costos
        Permission::create([
            'name'          => 'Navegar en Gestión de Costos',
            'slug'          => 'costos.index',
            'description'   => 'Navega y lista los costos de inscripción y/o colegiatura',
        ]);

        //89
        Permission::create([
            'name'          => 'Ver detalle de Costos',
            'slug'          => 'costos.show',
            'description'   => 'Ver datos de los costos de inscripción y/o colegiatura',
        ]);

        //90
        Permission::create([
            'name'          => 'Registrar Costos',
            'slug'          => 'costos.create',
            'description'   => 'Registra el costo de la inscripción y colegiatura',
        ]);

        //91
        Permission::create([
            'name'          => 'Editar Costos',
            'slug'          => 'costos.edit',
            'description'   => 'Editar el costo de la inscripción y colegiatura',
        ]);

        //92
        Permission::create([
            'name'          => 'Eliminar Costos',
            'slug'          => 'costos.destroy',
            'description'   => 'Elimina el costo de inscripción y/o colegiatura',
        ]);

        /* FIN PERMISO DE MÓDULO DE GESTIÓN ECONÓMICA */
    }
}