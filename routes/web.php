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
    | -------------------------------------------
    | *Ruta Resource asociada a los 7 métodos REST del controlador ProjectController y con el Middleware Auth
    |   *index(), create(), store(), show(), edit(), update() y destroy()
    | *El middleware Auth ya es incluído por defecto en Laravel
    | *Los middlewares son almacenados en app\Http\Middleware
    | *Los midllewares se deben registrar en app\Http\Kernel.php
    | -------------------------------------------
*/
// Route::resource('portfolio', 'ProjectController')->names('projects')->parameters(['portfolio' => 'project'])->middleware('auth');



/* 
    | ----------------------------------------------------------------------------
    | *El orden de las rutas es importante
    |   *Laravel lee las rutas de arriba hacía abajo
    | *Ruta básica asociada a la función store() del controlador MessageController
    | ----------------------------------------------------------------------------
*/
Route::post('/contact', 'MessageController@store');


/* 
    | ---------------------------------------------------------------------------
    | Ruta que incluye las rutas de login, registro y recuperación de contraseñas pero no permite registrar siendo invitado
    | *Si se usa Laravel 5.7
    |   *Para inhabilitar que usuarios invitados puedan registrarse sólo se debe modificase Auth::routes();
    |       *Esto Auth::routes(); por esto Auth::routes(['register' => false]);
    |   *Esta opción no se podía hacer en Laravel 5.5
    | ---------------------------------------------------------------------------
*/
Auth::routes(['register' => false]);



/* Notas:
    | ------------------------------------------------------------------------------------------------------------------------------------------
    | *Al usar el middleware sobre una routa resource, el middleware controla todas las rutas, para especificar que 
    |  funciones maneja el middleware y cuales no, se hace desde el controlador app\Http\Controllers\ProjectController.php
    | *El middleware no se implementa aquí pero de requerirlo, se puede usar sin problema
    | ------------------------------------------------------------------------------------------------------------------------------------------
*/



