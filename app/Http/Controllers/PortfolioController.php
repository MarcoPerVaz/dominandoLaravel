<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* 
    | -------------------------------------------------------------
    | *Se debe importar la clase Db si se quiere usar Query Builder
    | -------------------------------------------------------------
*/
// use Illuminate\Support\Facades\DB; /* No se va a usar pero funciona */

/* 
    | ------------------------------------------------------
    | *Se debe importar el modelo si se quiere usar Eloquent
    | ------------------------------------------------------
*/
use App\Project;
/*  */

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* 
            | ---------------------------------------------------------------------------------
            | *Obtiene todos los registros de la tabla Projects usando Query Builder de Laravel
            |   *Funciona pero se uso una forma distinta
            | ---------------------------------------------------------------------------------
        */
        // $portfolio = DB::table('projects')->get();

        /* 
            | -----------------------------------------------------------------
            | *Obtiene todos los registros de la tabla Projects usando Eloquent
            |   *Funciona pero se uso una forma distinta
            | -----------------------------------------------------------------
        */
        // $portfolio = Project::get();

        /* 
            | ---------------------------------------------------------------------------------------
            | *Obtiene todos los registros ordenados de forma descendente mediante id usando Eloquent
            |   *Funciona pero se uso una forma distinta
            | ---------------------------------------------------------------------------------------
        */
        // $portfolio = Project::latest('id')->get();

        /* 
            | -----------------------------------------------------------------------------------------------
            | *Obtiene todos los registros ordenados de forma descendente mediante updated_at usando Eloquent
            |   *Funciona pero se uso una forma distinta
            | -----------------------------------------------------------------------------------------------
        */
        // $portfolio = Project::latest('updated_at')->get();

        /* 
            | --------------------------------------------------------------------------------------------
            | *Obtiene todos los registros ordenados de forma descendente y con paginación usando Eloquent
            |   *Funciona pero se uso una forma distinta
            | --------------------------------------------------------------------------------------------
        */
        // $projects = Project::latest()->paginate();

        /* 
            | ----------------------------------------------------------------------
            | *Retorna una vista y la variable $projects usando la función compact()
            |   *Funciona pero se uso una forma distinta
            | ----------------------------------------------------------------------
        */
        // return view('portfolio', compact('projects'));

        /* 
            | ----------------------------------------------------------------
            | *Retorna una vista y la variable $projects usando un array 
            |  ordenados de forma descendente y con paginación usando Eloquent
            | ----------------------------------------------------------------
        */
        return view('portfolio', [
            'projects' => Project::latest()->paginate()
        ]);

    }
}

/* Notas:
    | -----------------------------------------------------------------------------------------------------------------------------
    | *ORM Eloquent: Object-Relational-Mapping | Mapeo de Objetos Relacional
    | *Eloquent Active Record: Agrega los métodos Http: save(), update(), delete(), etc, que no existen en los navegadores actuales
    | *El método paginate() por defecto muestra 15 registros, si desea cambiar debe colocar un número
    |   *Ejemplo: ->paginate(2); Muestra 2 sólo 2 registros por página
    | *Si paginate() se deja vacío y hay menos de 15 registros en la tabla, en la vista no se muestran los botones de paginación
    | -----------------------------------------------------------------------------------------------------------------------------
*/
