<?php

/* 
    | -------------------------------------------
    | 3 Rutas básicas con función view() y nombre
    | url: /
    | url: /about
    | url: /contact
    | -------------------------------------------
*/
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

/* 
    | ----------------------------------------------------------------------------
    | *Ruta básica asociada a la función index() del controlador ProjectController
    | ----------------------------------------------------------------------------
*/
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');

/* 
    | -----------------------------------------------------------------------------
    | *Ruta básica asociada a la función create() del controlador ProjectController
    | -----------------------------------------------------------------------------
*/
Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');

/* 
    | -----------------------------------------------------------------------------
    | *Ruta básica asociada a la función edit() del controlador ProjectController
    | -----------------------------------------------------------------------------
*/
Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');

/* 
    | -----------------------------------------------------------------------------
    | *Ruta básica asociada a la función update() del controlador ProjectController
    | *Se puede usar el método HTTP: PUT o PATCH para actualizar un proyecto
    | -----------------------------------------------------------------------------
*/
Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');

/* 
    | ----------------------------------------------------------------------------
    | *Ruta básica asociada a la función store() del controlador ProjectController
    | ----------------------------------------------------------------------------
*/
Route::post('/portfolio/crear', 'ProjectController@store')->name('projects.store');

/* 
    | -----------------------------------------------------------------------------------
    | *Ruta básica asociada a la función show() del controlador ProjectController
    | *El parámetro de la ruta debe ser igual al parámetro de la función
    |   *public function show(Project $project)
    |       *La función show() recibe como parámetro $project y debe ser pasada a la ruta
    |       *Route::get('/portfolio/{project}'
    | -----------------------------------------------------------------------------------
*/
Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

/* 
    | -----------------------------------------------------------------------------------
    | *Ruta básica asociada a la función destroy() del controlador ProjectController
    | *El parámetro de la ruta debe ser igual al parámetro de la función
    |   *public function show(Project $project)
    |       *La función show() recibe como parámetro $project y debe ser pasada a la ruta
    |       *Route::get('/portfolio/{project}'
    | -----------------------------------------------------------------------------------
*/
Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

/* 
    | ----------------------------------------------------------------------------
    | *El orden de las rutas es importante
    |   *Laravel lee las rutas de arriba hacía abajo
    | *Ruta básica asociada a la función store() del controlador MessageController
    | ----------------------------------------------------------------------------
*/
Route::post('/contact', 'MessageController@store');


/* Notas:
    | ------------------------------------------------------------------------------------------------------------------------------------
    | *Para guardar registros se utiliza el método Http POST
    | *Para actualizar un registro existente se puede usar el método HTTP: PUT o PATCH
    |   *En el curso se mostró un error que daba información sobre error en el método, en la versión 5.5 de Laravel solo apareció el error
    |       *No message
    | *Los navegadores no soportan los métodos PUT, PATCH, DELETE
    |   *Laravel tiene su mecanismo para poder usar este tipo de métodos HTTP
    | ------------------------------------------------------------------------------------------------------------------------------------
    | *Para eliminar un proyecto existente se puede usar el método HTTP: delete o post
    | ------------------------------------------------------------------------------------------------------------------------------------
*/

