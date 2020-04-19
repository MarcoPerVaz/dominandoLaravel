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
    | ---------------------------------------------------------------------------
    | *El orden de las rutas es importante
    |   *Laravel lee las rutas de arriba hacía abajo
    | *Ruta básica asociada a la función store() del controlador MessageController
    | ---------------------------------------------------------------------------
*/
Route::post('/contact', 'MessageController@store');


/* Notas:
    | -------------------------------------------------------------------------------------
    | *Para guardar registros se utiliza el método Http POST
    | -------------------------------------------------------------------------------------
*/

