    
  @if (session('status'))
    {{ session('status') }}   
  @endif


  {{-- Notas:
        | ----------------------------------------------------------------------------------------
        | *Se recibe la información a tráves de la variable de sesión 'status' enviada desde el controlador MessageController y ProjectController
        | ----------------------------------------------------------------------------------------
        | *Mensaje de sesión que viene del controlador app\Http\Controllers\MessageController.php
        |   *De la función store()
        |     *return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');
        | ----------------------------------------------------------------------------------------  
        | *Mensaje de sesión que viene del controlador app\Http\Controllers\ProjectController.php
        |   *De la función store(SaveProjectRequest $request)
        |     * return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
        |   *De la función update(Project $project, SaveProjectRequest $request)
        |     *return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
        |   *De la función destroy(Project $project)
        |     *return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
        | ----------------------------------------------------------------------------------------  
  --}}