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
        |   *Usando Model Binding Project $project - public function show(Project $project)
        | ------------------------------------------------
    */
    public function show(Project $project)
    {
        /* 
            | -----------------------------------------------------------------------------------------------------------------
            | *Retorna la vista projects.show y le pasa la variable 'project'
            | *El id es obtenido a tráves de la ruta
            | 'project' => $project La variable $project se obtiene usando Model Binding - public function show(Project $project)
            | -----------------------------------------------------------------------------------------------------------------
        */
        return view('projects.show', [
            'project' => $project
        ]);

    }

    /* 
        | ------------------------------------------------
        | *Retorna la vista que incluye el formulario para crear un nuevo proyecto
        | ------------------------------------------------
    */
    public function create(Project $project)
    {
       return view('projects.create');
    }

    /* 
        | ------------------------------------------------
        | *Guarda el nuevo proyecto en la base de datos
        | ------------------------------------------------
    */
    public function store(Request $request)
    {
       /* 
          | -----------------------------------------------------------------------------
          | *Retorna todos los valores de los elementos HTML que tengan la propiedad name
          | *public function store() así queda la función
          | -----------------------------------------------------------------------------
       */
       // return request();


       /* 
          | ----------------------------------------------------------------------------
          | *Retorna el valor específico de un elemento HTML que tenga la propiedad name
          | *public function store() así queda la función
          | ----------------------------------------------------------------------------
       */
       // return request('title');


       /* 
          | ---------------------------------------------------------------------
          | *todos los valores de los elementos HTML que tengan la propiedad name
          | *public function store(Request $request) así queda la función
          | ---------------------------------------------------------------------
       */
       // return $request;


       /* 
          | ----------------------------------------------------------------------------
          | *Retorna el valor específico de un elemento HTML que tenga la propiedad name
          | *public function store(Request $request) así queda la función
          | ----------------------------------------------------------------------------
       */
       // return $request->get('title);


       /* 
          | --------------------------------------------------------------------------------------
          | *Se guardan en variables los valores de los elementos HTML que tenga la propiedad name
          | *public function store() así queda la función
          | *Project::create([]) Se crean los registros en la base de datos
          | --------------------------------------------------------------------------------------
       */
        // $title          = request('title');
        // $url            = request('url');
        // $description    = request('description');

        // Project::create([
        //  'title'         => $title,
        //  'url'           => $url,
        //  'description'   => $description,
        // ]);


       /* 
          | ---------------------------------------------------------------------------------------------------------------------------------
          | *Se obtienen los valores de los elementos HTML que tenga la propiedad name: title, url y description
          | *public function store() así queda la función
          | *Al intentar mandar el formulario se muestra un error con MassAssignment(Asignación masiva) 
          |   *Para solucionarlo debe usar la propiedad $fillable en el modelo Project - Más información en app\Project.php
          | *Project::create([]) Se crean los registros en la base de datos
          | ---------------------------------------------------------------------------------------------------------------------------------
       */
        // return Project::create([
        //     'title'         => request('title'),
        //     'url'           => request('url'),
        //     'description'   => request('description'),
        // ]);


       /* 
          | ---------------------------------------------------------------------------------------------------------------------------------
          | *Se obtienen los valores de los elementos HTML que tenga la propiedad name: title, url y description
          | *public function store() así queda la función
          | *Al intentar mandar el formulario se muestra un error con MassAssignment(Asignación masiva) 
          |   *Para solucionarlo debe usar la propiedad $fillable en el modelo Project - Más información en app\Project.php
          | *Project::create([]) Se crean los registros en la base de datos
          | *Si se guarda el proyecto éxitosamente en la base de datos se redirije a la ruta con nombre 'projects.index'
          | ---------------------------------------------------------------------------------------------------------------------------------
       */
        // Project::create([
        //     'title'         => request('title'),
        //     'url'           => request('url'),
        //     'description'   => request('description'),
        // ]);

        // return redirect()->route('projects.index');


       /* 
          | ----------------------------------------------------------------------------------------------------------------------------------
          | *Si los elementos HTML en su propiedad name y los campos de la base de datos tienen el mismo nombre se puede usar request()->all()
          |   *Sólo los campos que estén en la propiedad $fillable en el modelo Project (app\Project.php) se guardarán en la base de datos
          | *public function store() así queda la función
          | *Al intentar mandar el formulario se muestra un error con MassAssignment(Asignación masiva) 
          |   *Para solucionarlo debe usar la propiedad $fillable en el modelo Project - Más información en app\Project.php
          | *Project::create([]) Se crean los registros en la base de datos
          | *Si se guarda el proyecto éxitosamente en la base de datos se redirije a la ruta con nombre 'projects.index'
          | ----------------------------------------------------------------------------------------------------------------------------------
       */
        Project::create(request()->all());

        return redirect()->route('projects.index');
    }
}
