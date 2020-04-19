<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        | *Laravel por defecto obtiene el registro mediante el id 
        |   *Por defecto $id y se pasa cómo parámetro - public function show($id)
        |   *Usando Model Binding Project $project - public function show(Project $project)
        | ------------------------------------------------
    */
    public function show(Project $project)
    {
        /* 
            | ------------------------------------------------------------
            | *Devuelve todos los campos del modelo Project mediante el id
            |   *public function show($id)
            | ------------------------------------------------------------
        */
        // return $id;

        /* 
            | -----------------------------------------------------------------------
            | *Devuelve todos los campos del modelo Project a tráves de Model Binding
            |   *public function show(Project $project)
            | -----------------------------------------------------------------------
        */
        // return $project;

        /* 
            | -----------------------------------------------------------------------------------------------------------------
            | *Retorna la vista projects.show y le pasa la variable 'project'
            | *El id es obtenido a tráves de la ruta
            | *Project::find($id) significa Eloquent encuentra el proyecto con el id - public function show($id)
            | *findOrFail() sirve para cuando se busca un proyecto con un id que no existe
            | *'project' => $id, Laravel por defecto obtiene un registro individual a tráves del id - public function show($id)
            | 'project' => $project La variable $project se obtiene usando Model Binding - public function show(Project $project)
            | -----------------------------------------------------------------------------------------------------------------
        */
        return view('projects.show', [
            // 'project' => Project::findOrFail($id)
            // 'project' => $id,
            'project' => $project
        ]);

    }
}


/* Notas:
    | -----------------------------------------------------------------------------------------------------------------------------
    | *Para usar Route Model Binding basta con inyectar el modelo como parámetro en la función
    |   *Ejemplo: public function show(Project $project)
    | -----------------------------------------------------------------------------------------------------------------------------
*/
