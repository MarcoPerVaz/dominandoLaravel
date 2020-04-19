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
    | -----------------------------------------------------------------------
    | *Se cambia el nombre del controlador PortfolioController.php por ProjectController.php
    | *Ruta básica asociada a la función index() del controlador ProjectController
    | -----------------------------------------------------------------------
*/
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');

/* 
    | -----------------------------------------------------------------------
    | *Se cambia el nombre del controlador PortfolioController.php por ProjectController.php
    | *Ruta básica asociada a la función show() del controlador ProjectController
    | -----------------------------------------------------------------------
*/
Route::get('/portfolio/{id}', 'ProjectController@show')->name('projects.show');

/* 
    | -----------------------------------------------------------------------
    | *Se cambia el nombre del controlador MessagesController.php por MessageController.php
    | *Ruta básica asociada a la función store() del controlador MessageController
    | -----------------------------------------------------------------------
*/
Route::post('/contact', 'MessageController@store');

