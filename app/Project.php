<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /* 
        | ----------------------------------------------------------------------------
        | *MassAsignment - Asignación masiva
        | *$fillable Permite controlar que campos se van a guardar en la base de datos
        | ----------------------------------------------------------------------------
    */
    // protected $fillable = ['title', 'url', 'description'];


    /* 
        | -------------------------------------------------------------------------------------
        | *$guard Permite controlar que campos no pueden ser guardados en la base de datos
        |   *Hace lo opuesto a $fillable
        | *El campo 'approved' no existe en la base de datos actual pero fue usado como ejemplo
        | -------------------------------------------------------------------------------------
    */
    // protected $guard = ['id', 'approved', 'created_at', 'updated_at'];


    /* 
        | -------------------------------------------------------------------------------------------------------------------------------------
        | *$guarded Permite deshabilitar la protección contra asignación masiva (mass assignment)
        | *Al usar $guarded es importante validar los campos en el controlador para seguir protegidos contra asignación masiva (mass asignment)
        |   *No usar request()->all()
        |   *Usar request()->only()
        |   *Usar request()->except()
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
    | *Documentación: https://laravel.com/docs/5.5/eloquent#mass-assignment
    | *Asignación masiva permite indicarle a Laravel que campos van a guardarse en la base de datos y evitar que otros campos puedan manipularse por terceros
    | *Se puede usar la propiedad $guarded siempre y cuando no se use request()->all() en el controlador
    |   *No usar request()->all()
    |   *Usar request()->only() si se quiere usar la propiedad $guarded
    |   *Usar request()->except() si se quiere usar la propiedad $guarded
    | ------------------------
*/
