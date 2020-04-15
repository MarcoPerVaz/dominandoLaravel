<?php

/* Notas:
    | -------------------------------------------------------------------------------------
    | Diferentes formas de pasar variables a la vista
    | -------------------------------------------------------------------------------------
*/

/*
    | ---------------------------------------------------------------------------------------------------
    | Ruta básica con nombre
    | url: /
    | Nota: No es recomendable crear ni asignar variables desde las rutas
    | La función compact() permite pasar variables a la vista siempre y cuando la variable se llame igual
    |   *$nombre = compact('nombre´)
    | ---------------------------------------------------------------------------------------------------
*/
Route::get('/', function () {
    $nombre = "Marco";

    return view('home', compact('nombre'));
})->name('home');

/* 
    | -------------------------------------------------------------------------------------------------------
    | Ruta básica con función view() y sin paso de variables
    | url: /
    | -------------------------------------------------------------------------------------------------------
*/
Route::view('/', 'home');

/* 
    | -------------------------------------------------------------------------------------------------------
    | Ruta básica con función view() y con paso de variables
    | Nota: No es recomendable crear ni asignar variables desde las rutas
    | url: /
    | -------------------------------------------------------------------------------------------------------
*/
Route::view('/', 'home', ['nombre' => "Marco"]);

/* 
    | -------------------------------------------------------------------------------------------------------
    | Ruta básica con función view() y nombre
    | url: /
    | -------------------------------------------------------------------------------------------------------
*/
Route::view('/', 'home')->name('home');

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
Route::view('/portfolio', 'portfolio')->name('portfolio');


/* Notas:
    | -----------------------------------------------------------
    | *La función estática view() sirve en caso de que la vista tenga poca o nula lógica de programación
    | *La función view('vista') de Laravel recibe como parámetro la vista y permite pasar variables a la vista
    | *Con la función view() no es necesario especificar la ruta completa de la vista, ya que la función asume que
    |  las vistas están en 'resources\views', tampoco es necesario indicar la extensión ya que la función view()
    |  asume que es '.blade.php'
    | *Formas de enviar variables a la vista
    |    *return view('home')->with('nombre', $nombre);
    |    *return view('home')->with(['nombre' => $nombre]);
    |    *return view('home', ['nombre' => $nombre]);
    |    *return view('home', compact('nombre')); // Más usada
    | *La función view() es usada cuando la vista no necesita mucha lógica de programación
    |    *Ejemplo: Políticas de privacidad, términos y condiciones, etc.
    | *Laravel lee las rutas de arriba hacía abajo por lo que si hay rutas con misma url y método ignora la de arriba
    | ---------------------------------------------------------------------------------------------------------------------
*/