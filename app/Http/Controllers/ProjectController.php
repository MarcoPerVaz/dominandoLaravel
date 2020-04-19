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

class ProjectController extends Controller
{
    /**
     * Display a listing of the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* 
            | ----------------------------------------------------------------
            | *Retorna una vista y la variable $projects usando un array 
            |  ordenados de forma descendente y con paginación usando Eloquent
            | ----------------------------------------------------------------
        */
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);

    }

    /* 
        | ------------------------------------------------
        | *Muestra la información de un proyecto existente
        | ------------------------------------------------
    */
    public function show($id)
    {
        /* 
            | ---------------------------------------------------------------
            | *Retorna el id del proyecto, esto es posible gracias a Eloquent
            | ---------------------------------------------------------------
        */
        // return $id;

        /* 
            | ------------------------------------------------------------------------------------
            | *Retorna todos los campos del proyecto con el $id , esto es posible gracias Eloquent
            | *Project::find($id) significa Eloquent encuentra el proyecto con el id
            | *El id es obtenido a tráves de la ruta
            | ------------------------------------------------------------------------------------
        */
        // return $project = Project::find($id);

        /* 
            | ----------------------------------------------------------------------
            | *Guarda toda la información del proyecto en la variable $project
            | *Project::find($id) significa Eloquent encuentra el proyecto con el id
            | *El id es obtenido a tráves de la ruta
            | ----------------------------------------------------------------------
        */
        // $project = Project::find($id);

        /* 
            | ----------------------------------------------------------------------
            | *Retorna la vista projects.show y le pasa la variable 'project'
            | *Project::find($id) significa Eloquent encuentra el proyecto con el id
            | *El id es obtenido a tráves de la ruta
            | ----------------------------------------------------------------------
        */
        // return view('projects.show', [
        //     'project' => Project::find($id)
        // ]);

        /* 
            | -----------------------------
            | *Retorna la vista projects.show y le pasa la variable 'project'
            | *Project::find($id) significa Eloquent encuentra el proyecto con el id
            | *El id es obtenido a tráves de la ruta
            | *findOrFail() sirve para cuando se busca un proyecto con un id que no existe
            | -----------------------------
        */
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);

    }
}

/* Notas:
    | -----------------------------------------------------------------------------------------------------------------------------
    | *Laravel convierte automáticamente a JSON al realizar un return de variables
    |   *Ejemplo return $project
    | -----------------------------------------------------------------------------------------------------------------------------
*/
