<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /* 
        | -------------------------------------------------------------------------------------------------------------------------------------
        | *$guarded Permite deshabilitar la protección contra asignación masiva (mass assignment)
        | -------------------------------------------------------------------------------------------------------------------------------------
    */
    protected $guarded = []; 


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
        return 'url';
    }
}
