<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* 
    | ------------------------------------------------------
    | *Se debe importar el modelo si se quiere usar Eloquent
    | ------------------------------------------------------
*/
use App\Project;
/* 
    | ---------------------------------------------------------------------------
    | *Se debe importar el FormRequest app\Http\Requests\CreateProjectRequest.php
    | ---------------------------------------------------------------------------
*/
use App\Http\Requests\SaveProjectRequest;

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
        |   *Usando Model Binding Project $project - public function show(Project $project)
        | ------------------------------------------------
    */
    public function show(Project $project)
    {
        /* 
            | -----------------------------------------------------------------------------------------------------------------
            | *Retorna la vista projects.show y le pasa la variable 'project'
            | 'project' => $project La variable $project se obtiene usando Model Binding - public function show(Project $project)
            | -----------------------------------------------------------------------------------------------------------------
        */
        return view('projects.show', [
            'project' => $project
        ]);

    }

    /* 
        | ------------------------------------------------------------------------
        | *Retorna la vista que incluye el formulario para crear un nuevo proyecto
        | ------------------------------------------------------------------------
    */
    public function create(Project $project)
    {
       return view('projects.create');
    }

    /* 
        | -------------------------------------------------------------------------------
        | *Guarda el nuevo proyecto en la base de datos
        | *Debe inyectar como parámetro si desea usar el FormRequest SaveProjectRequest
        |   *store(SaveProjectRequest $request)
        | -------------------------------------------------------------------------------
    */
    public function store(SaveProjectRequest $request)
    {
        /* 
            | -------------------------------------------------------------------------------------------------------
            | *La validación la hace el FormRequest SaveProjectRequest
            |   *Tener en consideración si se tiene deshabilitada la protección de asignación masiva (mass asignment)
            | *Si se deshabilita la protección contra asignación masiva(mass asignment)
            |   *Se deben validar los campos obligatoriamente
            |   *Se pasan los campos validados a Project::create()
            |     *$request->validated()
            |   *Se redirecciona a la ruta con nombre 'projects.index'
            | *return $request->validated(); Retorna los valores de los elementos HTML que tengan la propiedad name
            | -------------------------------------------------------------------------------------------------------
        */
        Project::create($request->validated());

        return redirect()->route('projects.index');
    }

    /* 
        | --------------------------------------------------------------------------
        | *Retorna la vista que incluye el formulario para editar proyecto existente
        | --------------------------------------------------------------------------
    */
    public function edit(Project $project)
    {
        /* 
            | -------------------------------------------------
            | *$project obtiene la instancia del modelo Project
            | *Se pasa toda la instancia del modelo Project a la vista 'projects.edit'
            | -------------------------------------------------
        */
         return view('projects.edit', [
            'project' => $project
        ]);
    }

    /* 
        | --------------------------------------------------------------------------
        | *Actualiza un proyecto existente
        | --------------------------------------------------------------------------
    */
    public function update(Project $project, SaveProjectRequest $request)
    {
        /* 
            | -------------------------------------------------------------------------------------------------------------------------------
            | *$project obtiene la instancia del modelo Project
            | *Se pasa toda la instancia del modelo Project a la vista 'projects.update'
            | *return $project; Muestra lo que se envía a la vista
            | * $project->update([]); Actualiza el proyecto existente
            |   *Se puede incluir la validación, en este caso no es necesario ya que la validación la hace el form request SaveProjectRequest
            |   *Se pasan los campos validados a Project::update()
            |     *$request->validated()
            | *return $request->validated(); Retorna los valores de los elementos HTML que tengan la propiedad name
            | *Se redirecciona a la ruta con nombre 'projects.show'
            | -------------------------------------------------------------------------------------------------------------------------------
        */
        // return $project;

        // $project->update([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description'),
        // ]);

        $project->update($request->validated());

        return redirect()->route('projects.show', $project);
    }
}


/* Notas:
    | -------------------------------------------------------------------------------------------------------------------------------------
    | *return redirect()->route('projects.show', $project); Al retornar $project como parámetro se redirecciona con el proyecto actualizado
    | -------------------------------------------------------------------------------------------------------------------------------------
*/
