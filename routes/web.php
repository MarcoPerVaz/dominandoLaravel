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
    | ----------------------------------------------------------------------------
*/
Route::resource('portfolio', 'ProjectController')->names('projects')->parameters(['portfolio' => 'project']);

/* 
    | ----------------------------------------------------------------------------
    | *Ruta básica asociada a la función store() del controlador MessageController
    | ----------------------------------------------------------------------------
*/
Route::post('/contact', 'MessageController@store');


/* 
    | ---------------------------------------------------------------------------
    | Ruta que incluye las rutas de login, registro y recuperación de contraseñas pero no permite registrar siendo invitado
    | ---------------------------------------------------------------------------
*/
Auth::routes(['register' => false]);



