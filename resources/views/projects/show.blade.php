
@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')

  {{-- title --}}
    <h1>{{ $project->title }}</h1>
  {{-- end title --}}

  {{-- btnEdit --}}
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
  {{-- end btnEdit --}}

  {{-- description --}}
    <p>{{ $project->description }}</p>
  {{-- end description --}}

  {{-- created_at --}}
    <p>{{ $project->created_at->diffForHumans() }}</p>
  {{-- end created_at --}}
@endsection
    

{{-- Notas:
      | --------------------------------------------------------------------------------------------------------------------
      | *route('projects.edit', $project) se pasa toda la instancia del modelo Project a la ruta con nombre 'projects.index'
      | --------------------------------------------------------------------------------------------------------------------  
--}}