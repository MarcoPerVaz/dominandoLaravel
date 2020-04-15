<?php

/* Notas:
    | -------------------------------------------------------------------------------------
    | Tenemos la siguiente situación:
    |    *Supongamos que el dueño del sitio nos pide que porfavor cambiemos la url de /contactos a /contactanos
    |    *Tendríamos que cambiar el nombre ruta por ruta, no hay problema si son pocos, 
    |    *¿Pero y si son 20, 50, 100 o más?, para eso son las rutas con nombre
    |    *Usando rutas con nombre solo tendríamos que modificar una sola ruta y no todas
    | -------------------------------------------------------------------------------------
*/

/*
    | ---------------
    | Ruta básica
    | url: /contactos
    | ---------------
*/
Route::get('/contactos', function () {
    return 'Saludos de contactos';
});

/* 
    | ----------------------------------------------------------------------------------
    | Ruta básica
    | url: /
    | Nota: No es recomendable usar la función echo de PHP ni imprimir HTML en las rutas 
    | ----------------------------------------------------------------------------------
*/
Route::get('/', function () {
    echo "<a href='/contactos'>Contactos 1</a> <br>";
    echo "<a href='/contactos'>Contactos 2</a> <br>";
    echo "<a href='/contactos'>Contactos 3</a> <br>";
    echo "<a href='/contactos'>Contactos 4</a> <br>";
    echo "<a href='/contactos'>Contactos 5</a> <br>";
});

/* 
    | -----------------
    | Ruta básica
    | url: /contactanos
    | -----------------
*/
Route::get('/contactanos', function () {
    return 'Saludos de contactos';
});

/* 
    | ----------------------------------------------------------------------------------
    | Ruta básica
    | url: /
    | Nota: No es recomendable usar la función echo de PHP ni imprimir HTML en las rutas 
    | ----------------------------------------------------------------------------------
*/
Route::get('/', function () {
    echo "<a href='/contactanos'>Contactos 1</a> <br>";
    echo "<a href='/contactanos'>Contactos 2</a> <br>";
    echo "<a href='/contactanos'>Contactos 3</a> <br>";
    echo "<a href='/contactanos'>Contactos 4</a> <br>";
    echo "<a href='/contactanos'>Contactos 5</a> <br>";
});


/* 
    | -------------------------------
    | Ruta básica con nombre
    | url: /contactos por /contactame
    | -------------------------------
*/
// Route::get('/contactanos', function () {
Route::get('/contactame', function () {
    return 'Saludos de contactos';
})->name('contactos');

/* 
    | -------------------------------
    | Ruta básica
    | url: /contactos por /contactame
    | -------------------------------
*/
Route::get('/', function () {
    echo "<a href='" . route('contactos') . "'>Contactos 1</a> <br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2</a> <br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3</a> <br>";
    echo "<a href='" . route('contactos') . "'>Contactos 4</a> <br>";
    echo "<a href='" . route('contactos') . "'>Contactos 5</a> <br>";
});


/* Notas:
    | -----------------------------------------------------------
    | No es recomendable usar la función echo de PHP
    | No se deben colocar rutas con el mismo nombre y método HTTP
    | Laravel lee las rutas de arriba hacía abajo, por lo que si son iguales laravel ignora la de arriba
    | ---------------------------------------------------------------------------------------------------------------------
*/