<?php

/* 
  | *Función que activa los links
  | *Función usada en la vista  
*/
function setActive($routeName)
{
  return request()->routeIs($routeName) ? 'active' : '';
}

/* Notas:
  | ------------------------------------------------------------------------
  | *Para que laravel reconozca este archivo y pueda usarse
  |   *Debe usarse el comando en la consola y dentro de la ruta del proyecto
  |     *composer dumpautoload
  | ------------------------------------------------------------------------
*/