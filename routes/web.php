<?php

/* 
    | -----------------------------------------------------------------------------------------------------------
    | *Si desea cambiar 'locale' => 'es', a 'locale' => 'en', sin necesidad de abrir el archivo config\app.php
    | *Nota: Se puso entre comentarios porque no se usa pero funciona
    | -----------------------------------------------------------------------------------------------------------
*/
// App::setLocale('en');

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
    | *Ruta básica asociada a la función index() del controlador PortfolioController
    | -----------------------------------------------------------------------
*/
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

/* 
    | -----------------------------------------------------------------------
    | *Ruta básica asociada a la función store() del controlador MessagesController
    | -----------------------------------------------------------------------
*/
Route::post('/contact', 'MessagesController@store');

