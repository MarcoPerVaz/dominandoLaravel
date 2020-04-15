<?php

/* Notas:
    |-------------------------------------------------------------------------------------
    | Ejemplo del sitio: dominandolaravel.com = Route::get('/', function)
    | Ejemplo del sitio: dominandolaravel.com/contacto = Route::get('/contacto', function)
    |-------------------------------------------------------------------------------------
*/

/*
    | -------------------------------
    | Ruta básica apuntando a la raíz
    | url: /
    | -------------------------------
*/
Route::get('/', function () {
    return 'Hola desde la página de inicio';
});

/* 
    | --------------
    | Ruta básica
    | url: /contacto
    | --------------
*/
Route::get('/contacto', function () {
    return 'Hola desde la página /contacto';
});

/* 
    | ------------------------------
    | Ruta con parámetro obligatorio
    | url: /saludo/{parametro}
    | ------------------------------
*/
Route::get('saludo/{nombre}', function ($nombre) {
    return 'Saludos ' . $nombre;
});

/* 
    | ---------------------------
    | Ruta con parámetro opcional
    | url: /saludo/{parametro?}
    | ---------------------------
*/
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return 'Saludos ' . $nombre;
});

/* 
    | ----------------------------------------------------------
    | Ruta con parámetro opcional
    | url: /saludo/{parametro?}
    | Nota: código obtenido de la sección 2 del curso 
    | ----------------------------------------------------------
*/
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
return 'Saludos ' . $nombre;
})->where('nombre', "[A-Za-z]+");


/* Notas:
    | -----------------------------------------------------------
    | Las funciones o métodos también son conocidas como Closures
    | -----------------------------------------------------------
    | Existen métodos de peticiones Http
    |   Route::get()
    |   Route::post() - Para enviar formularios desde las vistas
    |   Route::put()
    |   Route::patch()
    |   Route::delete()
    | Nota:Los navegadores no soportan put(), patch(), delete() pero laravel incluye las formas de manejar estas peticiones
    | ---------------------------------------------------------------------------------------------------------------------
    | Nota: No se deben colocar rutas con el mismo nombre y método, Laravel lee las rutas de arriba hacía abajo
            por lo que la ruta de arriba es ignorada
    | ---------------------------------------------------------------------------------------------------------------------
    | Nota: ->where('nombre', "[A-Za-z]+"); - Sirve para validar el parámetro
                *El parámetro solo acepta letras minúsculas y mayúsculas
*/