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
    | *Ruta básica asociada a la función index() del controlador PortfolioController
    | -----------------------------------------------------------------------
*/
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

/* 
    | -----------------------------------------------------------------------------------------------------
    | *Ruta que contiene 7 rutas (métodos REST)
    | *Ruta asociada al controlador PortfolioController
    | *PortfolioController contiene los 7 métodos REST (index, create, store, show, edit, update y destroy)
    | *Una ruta resource le asigna automáticamente los nombres a las rutas
    | -----------------------------------------------------------------------------------------------------
*/
// Route::resource('/portfolio', 'PortfolioController');

/* 
    | --------------------------------------------------------------------
    | *Ruta que contiene 2 rutas (métodos REST)
    | *Ruta asociada al controlador PortfolioController
    | *PortfolioController contiene 2 métodos REST (index, show)
    | *Una ruta resource le asigna automáticamente los nombres a las rutas
    | *Usar ->only() sirve para indicar que cree las rutas index y show
    | --------------------------------------------------------------------
*/
// Route::resource('/portfolio', 'PortfolioController')->only(['index', 'show']);

/* 
    | -----------------------------------------------------------------------------------
    | *Ruta que contiene 5 rutas (métodos REST)
    | *Ruta asociada al controlador PortfolioController
    | *PortfolioController contiene 5 métodos REST (create, store, edit, update y destroy)
    | *Una ruta resource le asigna automáticamente los nombres a las rutas
    | *Usar ->except() sirve para indicar que cree todas las rutas excepto index y show
    | -----------------------------------------------------------------------------------
*/
// Route::resource('/portfolio', 'PortfolioController')->except(['index', 'show']);


/* Notas:
    | --------------------------------------------------------------------------------------------------------
    | *Cuando se relaciona una ruta con un controlador no es necesario pasar la ruta completa del controlador,
    |  ya que Laravel asume que está en app\Http\Controllers
    | --------------------------------------------------------------------------------------------------------
*/