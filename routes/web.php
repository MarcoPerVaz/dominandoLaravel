<?php

/* 
    | -------------------------------------------------------------------------------------------------------
    | 4 Rutas básicas con función view() y nombre
    | url: /
    | url: /about
    | url: /contact
    | url: /portfolio
    | -------------------------------------------------------------------------------------------------------
*/
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

/* 
    | ---------------------------------------------
    | *Ruta asociada al controlador PortfolioController
    | *PortfolioController sólo tiene una función __invoke(Request $request)
    | ---------------------------------------------
*/
Route::get('/portfolio', 'PortfolioController')->name('portfolio');


/* Notas:
    | --------------------------------------------------------------------------------------------------------
    | *Cuando se relaciona una ruta con un controlador no es necesario pasar la ruta completa del controlador,
    |  ya que Laravel asume que está en app\Http\Controllers
    | --------------------------------------------------------------------------------------------------------
*/