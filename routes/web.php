<?php

Route::view('/', 'home')->name('home');

/* 
    | -------------------------------------------------------------------------------------------------------
    | 4 Rutas básicas con función view() y nombre
    | url: /
    | url: /about
    | url: /contact
    | url: /portfolio
    | *Se pasa a la vista resources\views\portfolio.blade.php la variable $portfolio y $portfolio1
    | -------------------------------------------------------------------------------------------------------
*/
$portfolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
 ];
 $portfolio1 = [

 ];
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/portfolio', 'portfolio', compact('portfolio', 'portfolio1'))->name('portfolio');