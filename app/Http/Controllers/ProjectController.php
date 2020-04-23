<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    /* 
        | --------------------------------------------------------------------------
        | *Implementa el middleware Auth
        | --------------------------------------------------------------------------
    */
    public function __construct()
    {
        $this->middleware(('auth'))->except('index', 'show');
    }

    
    /* 
        | --------------------------------------------------------------------------
        | *Muestra los proyectos
        | --------------------------------------------------------------------------
    */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    /* 
        | --------------------------------------------------------------------------
        | *Muestra un proyecto existente
        | --------------------------------------------------------------------------
    */
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);

    }

    /* 
        | --------------------------------------------------------------------------
        | *Muestra el formulario para crear un proyecto
        | --------------------------------------------------------------------------
    */
    public function create(Project $project)
    {
       return view('projects.create', [
           'project' => new Project
       ]);
    }

    /* 
        | --------------------------------------------------------------------------
        | *Guarda un proyecto
        | --------------------------------------------------------------------------
    */
    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
    }

    /* 
        | --------------------------------------------------------------------------
        | *Muestra el formulario para actualizar un proyecto
        | --------------------------------------------------------------------------
    */
    public function edit(Project $project)
    {
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
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }
}
