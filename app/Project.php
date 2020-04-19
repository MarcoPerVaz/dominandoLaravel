<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /* 
        | -------------------------------------------------------------------------------
        | *La función getRouteKeyName() permite usar URL's amigables 
        |   *En lugar de retornael id se puede retornar cualquier otro campo en la tabla
        | *Función para sobreescribir la función getRouteKeyName() de Laravel
        |   *Esta función viene incluída en el framework por lo que se debe sobreescribir
        |   *Por defecto retorna el campo id
        | -------------------------------------------------------------------------------
    */
    public function getRouteKeyName()
    {
        /* 
            | -----------------------------------------------------------------
            | *Se puede usar cualquier otro campo en la tabla
            | *Por lo general se usa un campo conocido como Slug
            |   *El campo 'url' en este proyecto es lo que viene siendo el slug
            | -----------------------------------------------------------------
        */
        return 'url';
    }
}

/* 
    | ------------------------
    | *La función getRouteKeyName() sobreescribe a la función original usada por el framework que retorna el campo 'id' por lo 
    |  que sobreescribiendolo se puede retornar cualquier otro campo de la tabla.
    | ------------------------
*/
