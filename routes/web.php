<?php

Route::get('/', 'Auth\LoginController@formPrincipal');

// Auth::routes();
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('inicio', 'InicioController@index')->name('inicio');


/*  RUTAS PARA EL SISTEMA
 */
//Inicio de sesión
Route::middleware(['auth'])->group(function(){
    // Roles
    //Creación de roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');
    
    //Navegar en los roles
    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    
    //Formulario para crear - verifica el permiso de create = crear
    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');
    
    //Actualizar - verifica si tiene permiso edit = editar
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');
    
    //Ver - verifica con el permiso de show
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');
    
    //Eliminar - permiso de destroy
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');
    
    //Formulario para editar
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');
    
    //Cargo
    Route::post('cargos/store', 'CargoController@store')->name('cargos.store')
        ->middleware('permission:cargos.create');
    
    Route::get('cargos', 'CargoController@index')->name('cargos.index')
        ->middleware('permission:cargos.index');
    
    Route::get('cargos/create', 'CargoController@create')->name('cargos.create')
        ->middleware('permission:cargos.create');
    
    Route::put('cargos/{cargo}', 'CargoController@update')->name('cargos.update')
        ->middleware('permission:cargos.edit');
    
    Route::get('cargos/{cargo}', 'CargoController@show')->name('cargos.show')
        ->middleware('permission:cargos.show');
    
    Route::delete('cargos/{cargo}', 'CargoController@destroy')->name('cargos.destroy')
        ->middleware('permission:cargos.destroy');
    
    Route::get('cargos/{cargo}/edit', 'CargoController@edit')->name('cargos.edit')
        ->middleware('permission:cargos.edit');

    //Centro Educativo
    Route::post('centros/store', 'CentroController@store')->name('centros.store')
        ->middleware('permission:centros.create');
    
    Route::get('centros', 'CentroController@index')->name('centros.index')
        ->middleware('permission:centros.index');
    
    Route::get('centros/create', 'CentroController@create')->name('centros.create')
        ->middleware('permission:centros.create');
    
    Route::put('centros/{centro}', 'CentroController@update')->name('centros.update')
        ->middleware('permission:centros.edit');
    
    Route::get('centros/{centro}', 'CentroController@show')->name('centros.show')
        ->middleware('permission:centros.show');
    
    Route::delete('centros/{centro}', 'CentroController@destroy')->name('centros.destroy')
        ->middleware('permission:centros.destroy');
    
    Route::get('centros/{centro}/edit', 'CentroController@edit')->name('centros.edit')
        ->middleware('permission:centros.edit');
    
    //Genero
    Route::post('generos/store', 'GeneroController@store')->name('generos.store')
        ->middleware('permission:generos.create');
    
    Route::get('generos', 'GeneroController@index')->name('generos.index')
        ->middleware('permission:generos.index');
    
    Route::get('generos/create', 'GeneroController@create')->name('generos.create')
        ->middleware('permission:generos.create');
    
    Route::put('generos/{genero}', 'GeneroController@update')->name('generos.update')
        ->middleware('permission:generos.edit');
    
    Route::get('generos/{genero}', 'GeneroController@show')->name('generos.show')
        ->middleware('permission:generos.show');
    
    Route::delete('generos/{genero}', 'GeneroController@destroy')->name('generos.destroy')
        ->middleware('permission:generos.destroy');
    
    Route::get('generos/{genero}/edit', 'GeneroController@edit')->name('generos.edit')
        ->middleware('permission:generos.edit');
    
    //Empleados
    Route::post('empleados/store', 'EmpleadoController@store')->name('empleados.store')
        ->middleware('permission:empleados.create');
    
    Route::get('empleados', 'EmpleadoController@index')->name('empleados.index')
        ->middleware('permission:empleados.index');
    
    Route::get('empleados/create', 'EmpleadoController@create')->name('empleados.create')
        ->middleware('permission:empleados.create');
    
    Route::put('empleados/{empleado}', 'EmpleadoController@update')->name('empleados.update')
        ->middleware('permission:empleados.edit');
    
    Route::get('empleados/{empleado}', 'EmpleadoController@show')->name('empleados.show')
        ->middleware('permission:empleados.show');
    
    Route::delete('empleados/{empleado}', 'EmpleadoController@destroy')->name('empleados.destroy')
        ->middleware('permission:empleados.destroy');
    
    Route::get('empleados/{empleado}/edit', 'EmpleadoController@edit')->name('empleados.edit')
        ->middleware('permission:empleados.edit');
});