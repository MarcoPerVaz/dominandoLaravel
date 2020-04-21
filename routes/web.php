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
    | *Ruta Resource asociada a los 7 métodos REST del controlador ProjectController
    |   *index(), create(), store(), show(), edit(), update() y destroy()
    | *Ruta Resource con nombre (names)
    |   *names Permite sobreescribir cualquiera de los 7 métodos dentro de un array(arreglo)
    |       *Ejemplo: 
    |           Route::resource('photos', 'PhotoController')->names([
    |               'create' => 'photos.build'
    |           ]);
    |       *Más información en https://laravel.com/docs/5.7/controllers#restful-naming-resource-routes
    | *->parameters(['portfolio' => 'project']) Permite modificar el nombre del parámetro de algunas rutas ya que por defecto sería 
    |       *Route::resource('portfolio/{portfolio}', 'ProjectController' 
    |           *En este caso la aplicación fallaría porque espera el parámetro project y no portfolio, para eso se usa la función parameters()
    |       *La función parameters() modifica el parámetro para las rutas que necesiten
    |           *Route::resource('portfolio/{project}' Con esto la aplicación vuelve a funcionar
    | *El parámetro de la ruta debe llamarse igual al parámetro en la función y por eso se necesitó usar la función parameters()
    | ----------------------------------------------------------------------------
*/
Route::resource('portfolio', 'ProjectController')->names('projects')->parameters(['portfolio' => 'project']);



/* 
    | ----------------------------------------------------------------------------
    | *El orden de las rutas es importante
    |   *Laravel lee las rutas de arriba hacía abajo
    | *Ruta básica asociada a la función store() del controlador MessageController
    | ----------------------------------------------------------------------------
*/
Route::post('/contact', 'MessageController@store');


/* Notas:
    | ------------------------------------------------------------------------------------------------------------------------------------------
    | *Para ver sólo las rutas de project
    |   *php artisan route:list --name=projects
    | ------------------------------------------------------------------------------------------------------------------------------------------
    | *Las rutas Resource es una sola ruta pero que contiene los 7 métodos básicos para un CRUD en Laravel
    |   *index, create, store, show, edit, update y destroy
    | ------------------------------------------------------------------------------------------------------------------------------------------
    | *Se le puede asignar un nombre a las rutas en caso de que se le quiera dejar portfolio en la url usando ->names(')
    |   *Route::resource('portfolio', 'ProjectController')->names('projects');
    | ------------------------------------------------------------------------------------------------------------------------------------------
    | *Se le puede asignar un parámetro a las rutas ->parameters(['portfolio' => 'project'])
    |   *Por defecto el parámetro es: {portfolio}
    |   *Con parameters se le cambiar por {portfolio} que es lo que necesitamos
    |       *Route::resource('portfolio', 'ProjectController')->names('projects')->parameters(['portfolio' => 'projects']);
    |           *El nombre del parámetro debe ser igual al parámetro en las funciones del controlador app\Http\Controllers\ProjectController.php
    |               *Ejemplo: show(Project $project)
    | ------------------------------------------------------------------------------------------------------------------------------------------
*/

