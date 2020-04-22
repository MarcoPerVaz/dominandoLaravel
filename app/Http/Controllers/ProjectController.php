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

    /* 
        | ----------------------------------------------------------------------------------------------------------------------
        | *En la función __construct() se aplica el middleware Auth
        | *$this->middleware(('auth'));
        |   *Todas las funciones no son accesibles si el usuario no está autenticado
        | ----------------------------------------------------------------------------------------------------------------------
        | *$this->middleware(('auth'))->only('create', 'edit'); 
        |   *only en español es: 'solo'
        |   *Las funciones create() y edit() solo son accesibles si el usuario está autenticado
        |   *Las funciones index(), store(), show(), update() y destroy() son accesibles si el usuario es invitado o autenticado
        | ----------------------------------------------------------------------------------------------------------------------
        | *$this->middleware(('auth'))->except('index', 'show');
        |   *excepto en español es: excepto
        |   *Las funciones index() y show() son accesibles si el usuario es invitado o autenticado
        |   *Las funciones create(), store(), edit(), update() y destroy() son accesibles si el usuario está autenticado 
        | ----------------------------------------------------------------------------------------------------------------------
    */
    public function __construct()
    {
        // $this->middleware(('auth'));
        // $this->middleware(('auth'))->only('create', 'edit');
        $this->middleware(('auth'))->except('index', 'show');
    }

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
       return view('projects.create', [
           'project' => new Project
       ]);
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

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
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

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
    }

    /* 
        | --------------------------------------------------------------------------
        | *Elimina un proyecto existente
        | --------------------------------------------------------------------------
    */
    public function destroy(Project $project)
    {
        /* 
            | -------------------------------------------------
            | *$project obtiene la instancia del modelo Project
            | -------------------------------------------------
        */
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }
}


/* Notas:
    | -------------------------------------------------------------------------------------------------------------------------------------
    | *auth es un alias de la clase \Illuminate\Auth\Middleware\Authenticate::class,
    |   *app\Http\Kernel.php
    | ¨Los middlewares se almancen en app\Http\Middleware
    | *Los middlewares se deben registrar en app\Http\Kernel.php
    | -------------------------------------------------------------------------------------------------------------------------------------
*/
