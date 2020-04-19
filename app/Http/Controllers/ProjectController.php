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
        // Project::create(request()->all());

        // return redirect()->route('projects.index');


        /* 
            | ---------------------------------------------------------------------------
            | *Si se deshabilita la protyección contra asignación masiva(mass assignment)
            |   *Se debe evitar usar request()->all()
            |   *Se debe usar usar request()->only()
            | ---------------------------------------------------------------------------
            | *request->only() Se deben incluir los campos donde se quiere guardar
        */
        // return request()->only('title', 'url', 'description');
        // Project::create(request()->only('title', 'url', 'description'));

        // return redirect()->route('projects.index');


        /* 
            | -------------------------------------------------------------------------
            | *Si se deshabilita la protección contra asignación masiva(mass asignment)
            |   *Se deben validar los campos
            |   *Se pasan los campos validados a Project::create()
            |   *Se redirecciona a la ruta con nombre 'projects.index'
            | -------------------------------------------------------------------------
        */
        $fields = request()->validate([
            'title'         => 'required',
            'url'           => 'required',
            'description'   => 'required',
        ]);

        Project::create($fields);

        return redirect()->route('projects.index');
    }
}

/* Notas:
    | --------------------------------------------------------------------------------------------------------------------------------------------------------
    | *Supongamos que tenemos un campo 'approved' => true que guardará si el proyecto fue aprobado y sólo se va a publicar si el campo es true(verdadero),
    |  de alguna manera un usuario malintencionado se entra que existe un campo 'approved' y modifica de false a true
    |   *Se puede hacer inspeccionado el elemento desde el navegador (click derecho + inspeccionar elemento)
    |   *Crea un elemento html con la propiedad name="approved" con valor 1 asumiendo que el campo es boolean (verdadero o falso)
    | *Al usar protección contra asignación masiva (mass asignment) se evita que el usuario malintencionado cree campos que no estén en la propiedad $fillable
    | --------------------------------------------------------------------------------------------------------------------------------------------------------
*/
