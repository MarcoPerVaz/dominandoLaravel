
@extends('layout')

@section('title', 'Portfolio')

@section('content')

  <h1>Projects</h1>

  <ul>
    <a href="{{ route('projects.create') }}">Crear proyecto</a>

    @forelse ($projects as $project)
        <li>
          <a href="{{ route('projects.show', $project) }}">{{ $project->title }} </a>
        </li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse

    {{ $projects->links() }}
  </ul>

@endsection


{{-- Notas:
      | ------------------------------------
      | *Al usar  route('portfolio.show', $project): $project sería como escribir $project->getRouteKey() => 1, lo que obtiene 
      |  todos los campos del registro con id = 1 y son pasados a la vista projects.show
      |   *Ejemplo: $project->id
      | *{{ $projects->links() }} hace que se vea la paginación si la tabla tiene más de 15 registros o en el controlador se hayan definido cuantos 
      |  registros mostrar por página y se supere ese número de registros
      | ------------------------------------  
--}}