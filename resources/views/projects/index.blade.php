
@extends('layout')

@section('title', 'Portfolio')

@section('content')

  <h1>Projects</h1>

  {{-- @if (session('status'))
    {{ session('status') }}   
  @endif --}}

   {{-- @include('partials.session-status') --}}

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
      | ----------------------------------------------------------------------------------------------------
      | *El bloque de código de if() fue pasado a la vista resources\views\partials\session-status.blade.php
      | *El @include('partials.session-status') fue pasado a la vista resources\views\layout.blade.php
      | *Se dejaron los código en esta vista como referencia
      | ----------------------------------------------------------------------------------------------------  
--}}